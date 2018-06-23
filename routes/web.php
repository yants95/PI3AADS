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
    $this->get('/home', 'AquarioController@api');
    $this->get('/aquario', 'AquarioController@index');
    $this->get('/aquario/inserir', 'AquarioController@create')->name('create.aquario');
    $this->post('/aquario/inserir', 'AquarioController@store')->name('add.aquario');
    $this->post('/aquario/edit', 'AquarioController@update');
    $this->get('/aquario/tomadas', 'AquarioController@tomadas');
    $this->get('/aquario/arduino', 'AquarioController@arduino')->name('show.arduino');
    $this->get('/aquario/temperatura', 'AquarioController@temperatura')->name('show.temperatura');
    $this->get('/aquario/iluminacao_manual', 'AquarioController@iluminacao_manual')->name('show.iluminacao_manual');
    $this->post('/aquario/arduino', 'AquarioController@store_arduino')->name('add.arduino');


    $this->get('/aquario/parametros', 'ParametrosController@index');
    $this->post('/aquario/parametros', 'ParametrosController@store')->name('add.parameters');
    $this->post('/aquario/parametros/edit', 'ParametrosController@update');

    $this->get('/aquario/potencia_iluminacao', 'iluminacaoController@index');
});

Auth::routes();
