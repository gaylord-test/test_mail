<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', 'AuthController@signin');

Route::get('/authorize', 'AuthController@gettoken');

Route::get('/mail', 'OutlookController@mail')->name('mail');

Route::get('/calendar', 'OutlookController@calendar')->name('calendar');

Route::get('/contacts', 'OutlookController@contacts')->name('contacts');

Route::get('/send_mail', 'OutlookController@sendmail')->name('sendmail');

Route::get('/read_mail/{id}', 'OutlookController@read_mail')->name('read_mail');

Route::post('/ajax-image-upload', 'OutlookController@ajaxImage');
Route::get('/ajax_drag', 'OutlookController@ajax_drag');
Route::get('/delta/{id}', 'OutlookController@delta');
Route::get('/notification', 'OutlookController@notif');