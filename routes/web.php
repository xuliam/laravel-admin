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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->name('admin.')->group(function  ()  {
    Route::get('/index',  "Admin\IndexController@index")->name('home');
    Route::group(['prefix'=>'config'],function (){
        Route::get("/site", "Admin\ConfigController@siteconfig")->name('config.siteconfig');
        Route::post("/store", "Admin\ConfigController@store")->name('config.store');
    });
});

Route::get('article', function(){
    return view("admin.index.index");
});
