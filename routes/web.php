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

Route::post('/adicionar-aquario', 'AquarioController@store')->name('add.aquario')->middleware('auth');;

Route::resource('aquario', 'AquarioController')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {;
    Route::get('aquario', 'AquarioController@index');
    Route::get('aquario/inserir', 'AquarioController@create');
    Route::post('aquario/inserir', 'AquarioController@store');
    Route::get('aquario/edit/{id}', 'AquarioController@edit');
    Route::post('aquario/edit/{id}', 'AquarioController@update');
    Route::post('aquario/deletar/{id}', 'AquarioController@destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
