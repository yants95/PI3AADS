<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function exibirCanalAzul(){
      return view('aquario.canal_azul');
    }

    public function exibirCanalBranco()
    {
      return view('aquario.canal_branco');
    }

    public function exibirTemperatura() {
      return view('aquario.temperatura');
    }
}
