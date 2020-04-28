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

Route::get('/','albumController@index');
Route::get('/album','albumController@index');
Route::get('/album/create','albumController@create')->name('album-create');
Route::post('/album/store','albumController@store')->name('album-store');
Route::get('/album/{id}','albumController@show')->name('album-show');
Route::get('/album/edit/{id}','albumController@edit')->name('album-edit');
Route::post('/album/update/{id}','albumController@update')->name('album-update');
Route::get('/album/delete/{id}','albumController@delete')->name('album-delete');

Route::get('/photo/create/{album_id}','photoController@create')->name('photo-create');
Route::post('/photo/store','photoController@store')->name('photo-store');
Route::get('/photo/{id}','photoController@show')->name('photo-show');
Route::get('/photo/delete/{id}','photoController@delete')->name('photo-delete');
Route::get('/photo/edit/{id}','photoController@edit')->name('photo-edit');
Route::post('/photo/update/{id}','photoController@update')->name('photo-update');
