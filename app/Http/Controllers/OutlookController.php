<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Microsoft\Graph\Graph;
use Microsoft\Graph\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class OutlookController extends Controller
{


public function delta($id){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $tokenCache = new \App\TokenStore\TokenCache;

  $graph = new Graph();
  $graph->setAccessToken($tokenCache->getAccessToken());
  $user = $graph->createRequest('GET', '/me')
                ->setReturnType(Model\User::class)
                ->execute();

  $deltaPageRequest = $graph->createCollectionRequest('GET', '/me/mailFolders/'.$id.'/messages/delta')
                                ->setPageSize(50)
                                ->setReturnType(Model\Message::class)
                                ->execute();
 // $data_c = array("categories" => array("traité"));
 //  $set_categorie = $graph->createRequest('PATCH', '/07506adc2a26a92a/messages/AQMkADAwATM0MDAAMS0xZWRjLWFjM2EtMDACLTAwCgBGAAADWLGruglOy0qg7EEkCT6W7QcAtgmXw34qeEOz9H9wXcEEkgAAAgEMAAAAtgmXw34qeEOz9H9wXcEEkgAAAgWBAAAA')
 //                                ->attachBody($data_c)
 //                                ->execute();
  $use = $user->getId();
  foreach ($deltaPageRequest as $key => $value) {
    if($value->getIsRead() == "true"){
      $lu=1;
    }else{
      $lu=0;
    }
    $id_message = $value->getId();
    $category = $value->getCategories();
    if($category != NULL){
      $categories= "";
      foreach ($category as $value_cat) {
        $categories .= $value_cat.", ";

      }
    }else{
      $categories="";
    }
    $folder = $value->getParentFolderId();
    $messages = $graph->createRequest('GET', "/me/messages/".$id_message)
                    ->setReturnType(Model\Message::class)
                    ->execute();
    $im_id = $messages->getInternetMessageId();
    $results = DB::select('select * from mails where mail_id = ? and user = ?', [$id_message, $use]);
    if(count($results) == 0){
      DB::insert('insert into mails (im_id, mail_id,user,category,lu,folder) values (?,?,?,?,?, ?)', [$im_id, $id_message, $use, $categories, $lu, $folder]);
            // echo "insert into mails (im_id, mail_id,user,category,lu,folder) values ($im_id,$id_message,$use,$categories,$lu, $folder)";
    }else{
      DB::update('update mails set category = ?, lu = ?, folder = ? WHERE mail_id = ? and user = ?', [$categories ,$lu, $folder, $id_message, $use]);
            // echo "insert into mails (im_id, mail_id,user,category,lu,folder) values ($im_id,$id_message,$use,$categories,$lu, $folder)";
    }
  }
return $deltaPageRequest;
}

public function ajax_drag(Request $request)
    {
if ($request->isMethod('get')){
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $tokenCache = new \App\TokenStore\TokenCache;

  $graph = new Graph();
  $graph->setAccessToken($tokenCache->getAccessToken());
          $draggableId = $_GET['draggableId'];
          $droppableId = $_GET['droppableId'];
          $data = array("destinationId" => $droppableId);

          $graph->createRequest("POST", "/me/messages/".$draggableId."/move")
          ->attachBody($data)
          ->execute();
          return response('oui');
        }else {
            return response('non');
        }
    }


public function ajaxImage(Request $request)
    {
        if ($request->isMethod('get'))
            return response('non');
        else {
            $validator = Validator::make($request->all(),
                [
                    'file' => 'image',
                ],
                [
                    'file.image' => 'The file must be an image (jpeg, png, bmp, gif, or svg)'
                ]);
            if ($validator->fails())
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = 'uploads/';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $request->file('file')->move($dir, $filename);
            return $filename;
        }
    }


public function sendmail()
{


  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $tokenCache = new \App\TokenStore\TokenCache;

  $graph = new Graph();
  $graph->setAccessToken($tokenCache->getAccessToken());

      $to = $_GET['to'];
      $subject = $_GET['subject'];
      $corps = $_GET['mess'];
      $att = $_GET['att'];
      if($att!=""){
        $base64 = base64_encode(file_get_contents("uploads/".$att));
        $type = mime_content_type("uploads/".$att);
        $mailBody = array( "Message" => array(
                           "subject" => $subject,
                           "body" => array(
                               "contentType" => "html",
                               "content" => $corps
                           ),
                         "sender" => array(
                             "emailAddress" => array(
                                 "name" => "gaylord",
                                 "address" => "gaylord_test@outlook.fr"
                             )
                         ),
                         "from" => array(
                             "emailAddress" => array(
                                     "name" => "gaylord",
                                     "address" => "gaylord_test@outlook.fr"
                             )
                         ),
                         "toRecipients" => array(
                             array(
                               "emailAddress" => array(
                                   "name" => "sebastien",
                                   "address" => $to
                               
                            )
                         )
                      ),
                         "attachments" => array(
                          array(
                              '@odata.type' => '#microsoft.graph.fileAttachment',
                              "Name" => $att,
                              "ContentBytes"=> $base64,
                              "ContentType" => $type
                          )
                         )
                  )
           );
    }else{
      $mailBody = array( "Message" => array(
                           "subject" => $subject,
                           "body" => array(
                               "contentType" => "html",
                               "content" => $corps
                           ),
                         "sender" => array(
                             "emailAddress" => array(
                                 "name" => "gaylord",
                                 "address" => "gaylord_test@outlook.fr"
                             )
                         ),
                         "from" => array(
                             "emailAddress" => array(
                                     "name" => "gaylord",
                                     "address" => "gaylord_test@outlook.fr"
                             )
                         ),
                         "toRecipients" => array(
                             array(
                               "emailAddress" => array(
                                   "name" => "sebastien",
                                   "address" => $to
                               
                            )
                         )
                      )
                       )
    );
    }
      $graph->createRequest("POST", "/me/sendMail")
          ->attachBody($mailBody)
          ->execute();
      return response("ok");
}

public function notif()
{
  if(isset($_REQUEST['validationToken'])){

      ob_clean();//this line is cleaning out that previously added linefeed

      return response($_REQUEST['validationToken'], 200)
          ->header('Content-Type', 'text/plain');
    }

}

 public function mail()
{
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $tokenCache = new \App\TokenStore\TokenCache;

  $graph = new Graph();
  $graph->setAccessToken($tokenCache->getAccessToken());

  $user = $graph->createRequest('GET', '/me')
                ->setReturnType(Model\User::class)
                ->execute();

  $messageQueryParams = array (
    // Only return Subject, ReceivedDateTime, and From fields
    "\$select" => "subject,receivedDateTime,from,bodyPreview,id",
    // Sort by ReceivedDateTime, newest first
    "\$orderby" => "receivedDateTime DESC",
    // Return at most 10 results
    "\$top" => "100"
  );

  $getMessagesUrl = '/me/mailfolders/inbox/messages?'.http_build_query($messageQueryParams);
  $messages = $graph->createRequest('GET', $getMessagesUrl)
                    ->setReturnType(Model\Message::class)
                    ->execute();


// $data_sub = array("changeType" => "created,updated", "notificationUrl" => "http://localhost:8000/notification","resource" => "/me/mailfolders('inbox')/messages","expirationDateTime" => "2020-03-20T11:00:00.0000000Z","clientState" => "SecretClientState");
//                     $notif = $graph->createRequest('GET', "https://graph.microsoft.com/v1.0/subscriptions")
//                     ->attachBody($data_sub)
//                     ->execute();
                    $sub = new Model\Subscription();
            $sub->setChangeType("created,updated");
            $sub->setNotificationUrl("http://localhost:8000/notification");
            $sub->setResource("/me/mailfolders('inbox')/messages");
            $sub->setClientState('SecretClientState');
            $dateTime = Carbon::now()->addDay(3);
            $sub->setExpirationDateTime($dateTime);

            $subResult = $this->graph->createRequest("POST", "/subscriptions")
                ->attachBody($sub)
                ->setReturnType(Model\Subscription::class)
                ->execute();

$data = array("displayName" => "projets");
$datachild = array("displayName" => "Enzo & Rosso");


$folder = $graph->createRequest('GET', "/me/mailFolders")
                    ->setReturnType(Model\User::class)
                    ->execute();

foreach ($folder as $key => $value) {
  $tab[]=$value->getDisplayName();
  if($value->getDisplayName() == "projets"){
    $id_projet = $value->getId();
  }
}
$projet = $graph->createRequest('GET', "/me/mailFolders/".$id_projet."/childFolders")
                    ->setReturnType(Model\User::class)
                    ->execute();

foreach ($projet as $key => $value) {
  $tab[]=$value->getDisplayName();
}
  if(!in_array("projets",$tab)){
  $graph->createRequest('POST', "/me/mailFolders")
                      ->attachBody($data)
                      ->execute();
  }

if(!in_array("Enzo & Rosso",$tab)){
$graph->createRequest('POST', "/me/mailFolders/".$id_projet."/childFolders")
                      ->attachBody($datachild)
                      ->execute();
                    }

$folder = $graph->createRequest('GET', "/me/mailFolders")
                    ->setReturnType(Model\User::class)
                    ->execute();

$projet = $graph->createRequest('GET', "/me/mailFolders/".$id_projet."/childFolders")
                    ->setReturnType(Model\User::class)
                    ->execute();

  return view('mail', array(
    'username' => $user->getDisplayName(),
    'messages' => $messages,
    'folder' => $folder,
    'projet' => $projet,
    'notif' => $subResult
  ));
}


public function read_mail($id)
{
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $tokenCache = new \App\TokenStore\TokenCache;

  $graph = new Graph();
  $graph->setAccessToken($tokenCache->getAccessToken());

  $user = $graph->createRequest('GET', '/me')
                ->setReturnType(Model\User::class)
                ->execute();

  $messageQueryParams = array (
    // Only return Subject, ReceivedDateTime, and From fields
    "\$select" => "subject,receivedDateTime,from,body,id,sender,hasAttachments,Attachments",
    // Sort by ReceivedDateTime, newest first
    "\$orderby" => "receivedDateTime DESC"
  );

  $getMessagesUrl = '/me/messages/'.$id.'?'.http_build_query($messageQueryParams);
  $messages = $graph->createRequest('GET', $getMessagesUrl)
                    ->setReturnType(Model\Message::class)
                    ->execute();

  $attach = $graph->createRequest('GET', "/me/messages/".$id."/attachments")
                    ->setReturnType(Model\FileAttachment::class)
                    ->execute();


  return view('read_mail', array(
    'username' => $user->getDisplayName(),
    'messages' => $messages,
    'attach' => $attach
  ));
}


public function calendar()
{
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $tokenCache = new \App\TokenStore\TokenCache;

  $graph = new Graph();
  $graph->setAccessToken($tokenCache->getAccessToken());

  $user = $graph->createRequest('GET', '/me')
                ->setReturnType(Model\User::class)
                ->execute();

  $eventsQueryParams = array (
    // // Only return Subject, Start, and End fields
    "\$select" => "subject,start,end",
    // Sort by Start, oldest first
    "\$orderby" => "Start/DateTime",
    // Return at most 10 results
    "\$top" => "100"
  );

  $getEventsUrl = '/me/events?'.http_build_query($eventsQueryParams);
  $starttime = microtime(true); // Top of page
  for ($i=0; $i < 10 ; $i++) { 
    $events = $graph->createRequest('GET', $getEventsUrl)
                  ->setReturnType(Model\Event::class)
                  ->execute();
  }
  $endtime = microtime(true); // Bottom of page

  $ti = $endtime - $starttime;
  $nb = count($events);
  return view('calendar', array(
    'username' => $user->getDisplayName(),
    'events' => $events,
    'timerr' => $ti,
    'compteur' => $nb
  ));
}


public function contacts()
{
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  $tokenCache = new \App\TokenStore\TokenCache;

  $graph = new Graph();
  $graph->setAccessToken($tokenCache->getAccessToken());

  $user = $graph->createRequest('GET', '/me')
                ->setReturnType(Model\User::class)
                ->execute();

  $contactsQueryParams = array (
    // // Only return givenName, surname, and emailAddresses fields
    "\$select" => "givenName,surname,emailAddresses",
    // Sort by given name
    "\$orderby" => "givenName ASC",
    // Return at most 10 results
    "\$top" => "10"
  );

  $getContactsUrl = '/me/contacts?'.http_build_query($contactsQueryParams);
  $contacts = $graph->createRequest('GET', $getContactsUrl)
                    ->setReturnType(Model\Contact::class)
                    ->execute();

  return view('contacts', array(
    'username' => $user->getDisplayName(),
    'contacts' => $contacts
  ));
}
}