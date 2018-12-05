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

Route::get('/', function (){
    return redirect('/news');
});

Auth::routes();
App::setLocale('ru');
Route::resource('/news', 'Web\NewsController');
Route::resource('/gallery', 'Web\GalleryController');
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::resource('/news', 'NewsController');
    Route::resource('/gallery', 'GalleryController');
});
