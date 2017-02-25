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
    return view('users.login');
});

Route::post('user/do-login','Auth\AuthController@doLogin');

Route::get('user/logout',function(){
    Auth::logout();
    return redirect('/');
});

Route::get('gallery/list','GalleryController@viewGalleryList');
Route::resource('gallery/save','GalleryController@saveGallery');
Route::get('gallery/view/{id}','GalleryController@viewGalleryPics');
Route::resource('image/do-upload','GalleryController@doImageUpload');
Route::get('gallery/delete/{id}', 'GalleryController@deleteGallery');