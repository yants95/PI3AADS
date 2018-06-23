<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AquarioService;
use App\Aquario;
use App\Parametros;
use App\Arduino;

use Input;
use Illuminate\Support\Facades\DB;
use Auth;

class AquarioController extends Controller
{

    protected $arduino;

    public function __construct(AquarioService $arduino) {
        $this->arduino = $arduino;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function api() {
        $api = $this->arduino->all();
        
        return view('aquario.geral', compact('api'));
    }
    
    public function index()
    {
        if(Auth::check()) {
            $aquario = Auth()->user()->aquario;
            return view('aquario.index', ['aquario' => $aquario]);
        }
    }
    
    public function temperatura() {
        return view('aquario.temperatura');
    }
    
    public function iluminacao_manual() {
        return view('aquario.iluminacao');
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

    public function tomadas() {
        $api = $this->arduino->all();
        
        return view('aquario.tomadas', compact('api'));
    }

    public function arduino() {
        $arduino = Arduino::all();
        return view('arduino.index', compact('arduino'));
    }

    public function store_arduino(Request $request){
        
        $arduino = new Arduino([
            'ip'            => $request->get('ip'),
            'mac_address'   => $request->get('mac_address')
        ]);


        $arduino->save();

        return redirect('/aquario/arduino');       
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
}
