<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Aquario;

class AquarioGraficoController extends Controller
{
<<<<<<< HEAD
    public function index() {
<<<<<<< HEAD
    	
    
    return view('grafico.index'); 
=======
    	$chart = Charts::create('bar', 'highcharts')
	        ->title('Produtos mais vendidos') // Título do gráfico
	        ->labels(['Smartphone', 'Notebook', 'TV']) // Propriedades que vão ser adicionadas
	        ->values([100, 20, 30]) // Valores das propriedades
	        ->dimensions(500, 300) // Dimensão = 500 largura x 300 altura
	        ->responsive(false) // É utilizado para se adaptar ao tamanho do box que se encontra
	        ->elementLabel("Total de vendas"); // Legenda para o gráfico
    
    	return view('grafico.index', ['chart' => $chart]); 
>>>>>>> dev
    }
=======
    
>>>>>>> dev
}
