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
    $this->post('/aquario/edit', 'AquarioController@update');


    $this->get('/aquario/criar/parametros', 'ParametrosController@create')->name('create.parametros');
    $this->post('/aquario/criar/parametros', 'ParametrosController@store')->name('add.parametros');

    $this->get('/aquario/importados', 'AquarioController@importados');
    $this->get('/aquario/grafico', 'AquarioGraficoController@index')->name('aquario.grafico');
});

Auth::routes();
