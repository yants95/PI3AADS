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

$this->group(['middleware' => 'auth'], function () {
	$this->get('/home', 'AquarioController@home')->name('home');
    $this->get('/aquario', 'AquarioController@index');
    $this->get('/aquario/inserir', 'AquarioController@create')->name('create.aquario');
    $this->post('/aquario/inserir', 'AquarioController@store')->name('add.aquario');
    $this->post('/aquario/edit', 'AquarioController@update');


    $this->get('/aquario/parametros', 'ParametrosController@index');
    $this->post('/aquario/parametros', 'ParametrosController@store')->name('add.parameters');
    $this->post('/aquario/parametros/edit', 'ParametrosController@update');

    $this->any('/aquario/buscar', 'AquarioController@pesquisa')->name('search.aquario');

    $this->get('/aquario/importados', 'AquarioController@importados');
    $this->get('/aquario/grafico', 'AquarioGraficoController@index')->name('aquario.grafico');
});

Auth::routes();
