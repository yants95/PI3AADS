<?php

namespace App\Http\Controllers;

use App\Parametros;
use Illuminate\Http\Request;

class ParametrosController extends Controller
{

    public function index() {
        $params = Parametros::paginate(5);

        return view('aquario.parameters', compact('params'));
    }

	public function create() {
		$params = Parametros::all();

        return view('aquario.parameters', compact('params'));
    }

    public function store(Request $request) {
        $params = new Parametros([
            'data'              => $request->get('data'),
            'ph'                => $request->get('ph'),
            'salinidade'        => $request->get('salinidade'),
            'calcio'            => $request->get('calcio'),
            'magnesio'          => $request->get('magnesio'),
            'reserva_alcalina'  => $request->get('reserva_alcalina'),
            'amonia'            => $request->get('amonia'),
            'nitrito'           => $request->get('nitrito'),
            'nitrato'           => $request->get('nitrato'),
            'fosfato'           => $request->get('fosfato'),
            'silica'            => $request->get('silica'),
        ]);

        $params->aquario_id     = $request->aquario_id;

        $params->save();

        return redirect("/aquario/parametros");
    }

    public function update(Request $req)
    {
        $params = Parametros::find ($req->id);

        $params->data               = $req->data;
        $params->ph                 = $req->ph;
        $params->salinidade         = $req->salinidade;
        $params->calcio             = $req->calcio;
        $params->magnesio           = $req->magnesio;
        $params->reserva_alcalina   = $req->reserva_alcalina;
        $params->amonia             = $req->amonia;
        $params->nitrito            = $req->nitrito;
        $params->nitrato            = $req->nitrato;
        $params->fosfato            = $req->fosfato;
        $params->silica             = $req->silica;

        $params->save();
        return response()->json($params); 
    }
}