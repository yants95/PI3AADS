<?php

namespace App\Http\Controllers;

use App\Parametros;
use Illuminate\Http\Request;

class ParametrosController extends Controller
{

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

        return redirect("/aquario/criar/parametros");
    }
}