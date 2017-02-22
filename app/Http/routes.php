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

Route::get('gallery/list','GalleryController@viewGalleryList');
Route::get('gallery/save','GalleryController@saveGallery');
Route::get('gallery/view/{id}','GalleryController@viewGalleryPics');
Route::get('image/do-upload','GalleryController@doImageUpload');