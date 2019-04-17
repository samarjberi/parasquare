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
    return view('index');
});

Route::get('login', 'ContactController@index');
Route::get('login', 'ContactController@create');/* qui va afficher le formualire aui permet de créer un ficher cv*/
Route::post('login','ContactController@store');
Route::get('login/{id}', 'ContactController@update');
Route::delete('login/{id}', 'ContactController@destroy');

/*Route::get('/login', 'TestController@admin');*/