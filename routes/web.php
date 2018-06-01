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

<<<<<<< HEAD
=======
/* -- Rotas para utilização do API Resources -- */

use App\User;
use App\Http\Resources\Aquarios as AquariosResource;

Route::get('/endpoint', function() {
   $user = User::find(1);
   return new AquariosResource($user);
});

/* -------------------------------------------- */

>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
Route::get('/', function () {
    return view('auth.login');
});

$this->group(['middleware' => 'auth'], function () {
<<<<<<< HEAD
	$this->get('/home', 'AquarioController@get_temperatura');
=======
	$this->get('/home', 'AquarioController@geral')->name('home');
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
    $this->get('/aquario', 'AquarioController@index');
    $this->get('/aquario/inserir', 'AquarioController@create')->name('create.aquario');
    $this->post('/aquario/inserir', 'AquarioController@store')->name('add.aquario');
    $this->post('/aquario/edit', 'AquarioController@update');
<<<<<<< HEAD
    $this->get('/aquario/tomadas', 'AquarioController@tomadas');
    $this->get('/aquario/arduino', 'AquarioController@arduino')->name('show.arduino');
    $this->post('/aquario/arduino', 'AquarioController@store_arduino')->name('add.arduino');
=======

    $this->post ('/aquario/apagar', 'AquarioController@destroy' );
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34


    $this->get('/aquario/parametros', 'ParametrosController@index');
    $this->post('/aquario/parametros', 'ParametrosController@store')->name('add.parameters');
    $this->post('/aquario/parametros/edit', 'ParametrosController@update');

    $this->any('/aquario/buscar', 'AquarioController@pesquisa')->name('search.aquario');

<<<<<<< HEAD
=======
    $this->get('/aquario/importados', 'AquarioController@importados');

>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
    $this->get('/aquario/grafico', 'AquarioGraficoController@index')->name('aquario.grafico');
});

Auth::routes();
