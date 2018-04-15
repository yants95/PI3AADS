<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;

class AquarioGraficoController extends Controller
{
    public function index() {
    	
    
    return view('grafico.index'); 
    }
}
