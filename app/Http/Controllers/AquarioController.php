<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aquario;
use Illuminate\Database\QueryException;

class AquarioController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aquario = Aquario::paginate(5);

        return view('aquario.aquario', compact('aquario'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aquario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aquario = new Aquario([
            'data_montagem'    => $request->get('data_montagem'),
            'largura'          => $request->get('largura'),
            'comprimento'      => $request->get('comprimento'),
            'altura'           => $request->get('altura'),
            'descricao'        => $request->get('descricao'),
            'valor'            => $request->get('valor'),
            'data_desmontagem' => $request->get('data_desmontagem')
        ]);

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

    public function home() {
        return view('aquario.home');
    }

    public function update(Request $req)
    {
        $aquario = Aquario::find ($req->id);

        $aquario->data_montagem = $req->data_montagem;
        $aquario->largura = $req->largura;
        $aquario->altura = $req->altura;
        $aquario->comprimento = $req->comprimento;
        $aquario->descricao = $req->descricao;
        $aquario->valor = $req->valor;
        $aquario->data_desmontagem = $req->data_desmontagem;

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
      $aquario = Aquario::find($id);
      $aquario->delete();

      return redirect('/aquario');
    }
}
