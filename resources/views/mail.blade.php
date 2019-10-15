@extends('layout')
@section('content')

<div class="page-aside-left">
  <?php var_dump($notif);?>

                                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#compose-modal" id="nee">Nouveau mail</button>

                                            <div class="email-menu-list mt-3">
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-star mr-2"></i>Favoris</a> -->
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-clock mr-2"></i>Snoozed</a> -->
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-document mr-2"></i>Draft<span class="badge badge-info-lighten float-right ml-2">32</span></a> -->
                                                <?php foreach ($folder as $key => $value) {
                                                  if($value->getDisplayName()!="projets" && $value->getDisplayName()!="Archive"){
                                                    if($value->getDisplayName()=="Boîte de réception"){?>
                                                    <a href="javascript: void(0);" class="text-danger font-weight-bold droppable"  id="<?php echo $value->getId();?>"><i class="dripicons-inbox mr-2"></i>Réception<span class="badge badge-danger-lighten float-right ml-2">7</span></a>
                                                 <?php }else{ ?>
                                                  <a href="javascript: void(0);" class="droppable" id="<?php echo $value->getId();?>"><i class="mr-2  dripicons-folder"></i><?php echo $value->getDisplayName();?></a>

                                               <?php } }
                                             }?>
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-trash mr-2"></i>Trash</a> -->
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-tag mr-2"></i>Important</a> -->
                                                <!-- <a href="javascript: void(0);"><i class="dripicons-warning mr-2"></i>Spam</a> -->
                                            </div>

                                            <div class="mt-4">
                                                <h6 class="text-uppercase">Projets</h6>
                                                <div class="email-menu-list labels-list mt-2">
                                                  <?php foreach ($projet as $key => $value) {?>
                                                    <a href="javascript: void(0);" id="<?php echo $value->getId();?>" class="droppable"><i class="mdi mdi-circle font-13 text-info mr-2"></i><?php echo $value->getDisplayName();?></a>
                                                  <?php } ?>
                                                </div>
                                            </div>

                                            <div class="mt-5">
                                                <!-- <h4><span class="badge badge-pill p-1 px-2 badge-secondary-lighten">FREE</span></h4> -->
                                                <h6 class="text-uppercase mt-3">Stockage</h6>
                                                <div class="progress my-2 progress-sm">
                                                    <div class="progress-bar progress-lg bg-success" role="progressbar" style="width: 46%" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <p class="text-muted font-13 mb-0">7.02 GB (46%) of 15 GB uutilisé</p>
                                            </div>

                                        </div>
<div class="page-aside-right">

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-archive font-16"></i></button>
                                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-alert-octagon font-16"></i></button>
                                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-delete-variant font-16"></i></button>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-folder font-16"></i>
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">Move to:</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-label font-16"></i>
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">Label as:</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                                </div>
                                            </div>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-secondary dropdown-toggle arrow-none" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal font-16"></i> Plus
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <span class="dropdown-header">More Options :</span>
                                                    <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                                    <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                                </div>
                                            </div>

                                            <div class="mt-3">
                                                <ul class="email-list" style="overflow: visible;">
                                                    
<?php if (isset($messages)) {
      foreach($messages as $message) { ?>
                                                    <li class="draggable" id="<?php echo $message->getId(); ?>">
                                                        <div class="email-sender-info">
                                                            <div class="checkbox-wrapper-mail">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input" id="mail2">
                                                                    <label class="custom-control-label" for="mail2"></label>
                                                                </div>
                                                            </div>
                                                            <span class="star-toggle mdi mdi-star-outline"></span>
                                                            <!-- <a href="https://outlook.live.com/mail/deeplink/readconv/AQQkADAwATM3ZmYAZS0yNjE1LTY2ADExAC0wMAItMDAKABAA3P5%2FBjuqJkSrkBNzXGgaUQ%3D%3D?version=2019093004.10&popoutv2=1" class="email-title"> -->
                                                            <a href="read_mail/<?php echo $message->getId();?>" class="email-title">

                                                              <?php echo (substr($message->getSubject(),0,25)."..."); ?>
                                                                
                                                              </a>
                                                        </div>
                                                        <div class="email-content">
                                                            <a href="javascript: void(0);" class="email-subject">
                                                                <span><?php echo $message->getBodyPreview(); ?></span>
                                                            </a>
                                                            <div class="email-date"><?php echo $message->getReceivedDateTime()->format('j') ?> <?php echo $message->getReceivedDateTime()->format('M'); ?></div>
                                                        </div>
                                                        <div class="email-action-icons">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                                    <a href="javascript: void(0);"><i class="mdi mdi-archive email-action-icons-item"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript: void(0);"><i class="mdi mdi-delete email-action-icons-item"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript: void(0);"><i class="mdi mdi-email-mark-as-unread email-action-icons-item"></i></a>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <a href="javascript: void(0);"><i class="mdi mdi-clock email-action-icons-item"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <?php  }
    } ?>
                                                </ul>
                                            </div>
                                            <!-- end .mt-4 -->

                                            <div class="row">
                                                <div class="col-7 mt-1">
                                                    Vous avez <?php echo count($messages);?> messages
                                                </div> <!-- end col-->
                                            </div>
                                            <!-- end row-->
                                        </div>


@endsection