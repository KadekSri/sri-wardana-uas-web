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

Route::get('/', function () {
    return view('welcome');
});

 
Route::get('/admin','AdminController@index');
Route::post('/admin/create','AdminController@create');
Route::get('/admin/{id}/edit','AdminController@edit');
Route::post('/admin/{id}/update','AdminController@update');
Route::get('/admin/{id}/delete','AdminController@delete');
Auth::routes();


Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');

Auth::routes();

Route::get('/home', 'AdminController@index')->name('home');

