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


Route::get('/Get_list', 'ApiController@Get_list');
Route::post('/Add_list', 'ApiController@Add_list');
Route::post('/Update_list', 'ApiController@Update_list');
Route::post('/Update_list_All', 'ApiController@Update_list_All');