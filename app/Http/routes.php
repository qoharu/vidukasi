<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|-- Home --|
*/
Route::get('tujuan','Home@objective');
Route::get('tentang','Home@about');
Route::get('donasi','Home@donate');
Route::get('kontak','Home@contact');

/*
|-- Account --|
*/
Route::get('masuk','Account@login');
Route::post('masuk','Account@post_login');
Route::get('daftar','Account@register');
Route::post('daftar','Account@post_register');
Route::get('logout','Account@logout');

/*
|-- User --|
*/
Route::get('pengaturan','User@setting');
Route::get('profil','User@profile');
Route::get('unggah','User@upload');
Route::post('unggah','User@upload_post');
Route::get('video-saya','User@myvideos');
Route::get('notifikasi','User@notifications');
Route::get('pesan','User@messages');

/*
|-- Video --|
*/
Route::get('{category}/{video_id}','Video@view_video');
Route::post('{category}/{video_id}','Video@view_video');
