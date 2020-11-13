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

Route::get('/', 'ContactController@index');

Route::get('/contacts/create', 'ContactController@create');

Route::post('/contacts', 'ContactController@store');

Route::get('/contacts/{id}/edit','ContactController@edit');

Route::patch('/contacts/{id}','ContactController@update');

Route::delete('/contacts/{id}','ContactController@destroy');
