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
    return view('auth.login');
});

Route::post('/adicionar-aquario', 'AquarioController@store')->name('add.aquario')->middleware('auth');;

Route::resource('aquario', 'AquarioController')->middleware('auth');

$this->group(['middleware' => 'auth'], function () {
	$this->get('/home', 'AquarioController@home')->name('home');
    $this->get('/aquario', 'AquarioController@index');
    $this->get('/aquario/inserir', 'AquarioController@create')->name('create.aquario');
    $this->post('/aquario/inserir', 'AquarioController@store')->name('add.aquario');
    $this->get('/aquario/edit/{id}', 'AquarioController@edit')->name('show.aquario');
    $this->post('/aquario/edit', 'AquarioController@update');
    $this->post('/aquario/deletar/{id}', 'AquarioController@destroy');
});

Auth::routes();
