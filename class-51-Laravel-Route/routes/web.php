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
Route::get('/belal','controller_group_routing@Jamal');

Route::prefix('admin')->group(function(){
	Route::get('kamal','practiceController@methodprac');
	Route::get('jamal','groupRoutingController@methodprac');
});

Route::prefix('user')->group(function(){
	Route::get('Hasan','practiceController@methodprac');
});

Route::namespace('admin')->group(function(){
	Route::get('Abdur_Rahim','adminController@adminNamespace');
	Route::get('md_belal','adminController@adminNamespace2');
});
Route::group(['prefix'=>'customer','namespace'=>'customer'],function(){
	Route::get('dashboard','customerController@customerMethod');
	Route::get('dashboard2','customerController@customerMethod2');
});