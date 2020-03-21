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
Route::get('contacts', 'ContactController@getIndex');
Route::post('contacts', 'ContatController@postStore');
Route::get('contacts/data', 'ContactController@getData');
Route::post('contacts/update', 'ContactController@postUpdate');
Route::post('contacts/delete', 'ContactController@postDelete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
