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


Route::group(
[
    'prefix' => LaravelLocalization::setLocale('en'),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ 


Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'admin'] , function(){
    Route::get('/', function () {
    return view('Admin.index');
});

});



});