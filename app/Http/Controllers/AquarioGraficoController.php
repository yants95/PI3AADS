<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aquario;

class AquarioGraficoController extends Controller
{
	public function index() {
	    $aquario = Aquario::all();
		
    	return view('grafico.index')->with('aquario', $aquario); 
	}
}
