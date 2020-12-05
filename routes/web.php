<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');
Route::get('/gallery', 'GalleryController@index');
Route::get('/about', 'AboutController@index');
Route::get('/contact', 'ContactController@index');
Route::post('/contact_store', 'ContactController@store');
Route::get('/thankspage', 'ContactController@thanks');
Route::get('/game','GameController@index');


Route::group(['prefix'=>'admin','namespace'=>'Admin'],function(){
    Route::get('/','DashboardController@index');
    Route::resource('/galleries','GalleriesController');
    Route::resource('/details','DetailsController');
    Route::resource('/news','NewsController');
});



