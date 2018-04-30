<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aquario;
use App\Parametros;
use GuzzleHtpp\Client;
use Input;
use Illuminate\Support\Facades\DB;
use Auth;

class AquarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function importados() {
        $client = new Client([
            'base_uri' => 'https://aquarios-c47c4.firebaseio.com/dados/00001.json',
        ]);

        $response = $client->request('GET');

        $importados = json_decode($response->getBody()->getContents());

        return $importados;
    }

    public function index()
    {
        if(Auth::check()) {
            $aquario = Auth()->user()->aquario;
            return view('aquario.index', compact('aquario'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = Auth()->user()->id;

        $aquario = new Aquario([
            'data_montagem'    => $request->get('data_montagem'),
            'largura'          => $request->get('largura'),
            'comprimento'      => $request->get('comprimento'),
            'altura'           => $request->get('altura'),
            'descricao'        => $request->get('descricao'),
            'valor'            => $request->get('valor'),
            'data_desmontagem' => $request->get('data_desmontagem')
        ]);

        $aquario->user_id = $user_id;

        $aquario->save();

        return redirect('/aquario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aquario = Aquario::find($id);

        return view('aquario.edit', compact('aquario','id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function geral() {
        return view('aquario.geral');
    }

    public function update(Request $req)
    {
        $aquario = Aquario::find ($req->id);

        $aquario->data_montagem     = $req->data_montagem;
        $aquario->largura           = $req->largura;
        $aquario->altura            = $req->altura;
        $aquario->comprimento       = $req->comprimento;
        $aquario->descricao         = $req->descricao;
        $aquario->valor             = $req->valor;
        $aquario->data_desmontagem  = $req->data_desmontagem;

        $aquario->save();
        return response()->json($aquario); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function pesquisa(Request $request) {
        $descricao = $request->get('descricao');

        $aquario = DB::table('aquarios')
                        ->where('descricao','like','%'. $descricao . '%')
                        ->where('user_id', Auth()->user()->id)
                        ->get();

        return view('aquario.index', compact('aquario'));
    }
}
