<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Services\AquarioService;
use App\Aquario;
use App\Parametros;
use App\Arduino;

=======
use App\Aquario;
use App\Parametros;
use GuzzleHtpp\Client;
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
use Input;
use Illuminate\Support\Facades\DB;
use Auth;

class AquarioController extends Controller
{
<<<<<<< HEAD

    protected $arduino;

    public function __construct(AquarioService $arduino) {
        $this->arduino = $arduino;
    }
=======
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
<<<<<<< HEAD
    public function get_temperatura() {
        $temperatura = $this->arduino->all();
        
        return view('aquario.geral', compact('temperatura'));
=======
    public function importados() {
        $client = new Client([
            'base_uri' => 'https://aquarios-c47c4.firebaseio.com/dados/00001.json',
        ]);

        $response = $client->request('GET');

        $importados = json_decode($response->getBody()->getContents());

        return $importados;
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
    }

    public function index()
    {
        if(Auth::check()) {
            $aquario = Auth()->user()->aquario;
<<<<<<< HEAD
            return view('aquario.index', ['aquario' => $aquario]);
=======
            return view('aquario.index', compact('aquario'));
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
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

<<<<<<< HEAD
    public function tomadas() {
        return view('aquario.tomadas');
    }

    public function arduino() {
        $arduino = Arduino::all();
        return view('arduino.geral', compact('arduino'));
    }

    public function store_arduino(Request $request){
        
        $arduino = new Arduino([
            'ip'            => $request->get('ip'),
            'mac_address'   => $request->get('mac_address')
        ]);


        $arduino->save();

        return redirect('/aquario/arduino');       
    }

=======
>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
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
<<<<<<< HEAD
        //
=======

>>>>>>> 2fc741a72cdf9c8c21e1fb138a231ec601117a34
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
