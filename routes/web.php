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
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/',             ['as' => '/' ,      'uses' => 'Controller@index']);
    Route::get('about' ,        ['as' => 'about' ,      'uses' => 'Controller@about']);
    Route::get('blog' ,         ['as' => 'blog' ,       'uses' => 'Controller@blog']);
    Route::get('contact-us' ,   ['as' => 'contactUs' ,  'uses' => 'Controller@contactUs']);
    Route::get('our-rooms' ,    ['as' => 'ourRooms' ,   'uses' => 'Controller@ourRooms']);
    Route::get('restaurant' ,   ['as' => 'restaurant' , 'uses' => 'Controller@restaurant']);
});

Route::group(['prefix' => 'administrator' ,'as' => 'admin.', 'namespace' => 'App\Http\Controllers\admin'], function () {
    Route::get('/' ,        ['as' => 'index' , 'uses' => 'MainController@signin']);
    Route::get('index' ,   ['as' => 'index' , 'uses' => 'MainController@index']);
});