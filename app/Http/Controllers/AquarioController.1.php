<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aquario;

class AquarioController extends Controller
{
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aquario = Aquario::all();

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
    public function update(Request $request, $id)
    {
        $aquario = Aquario::find($id);
        $aquario->data_montagem    = $request->get('data_montagem');
        $aquario->largura          = $request->get('largura');
        $aquario->comprimento      = $request->get('comprimento');
        $aquario->altura           = $request->get('altura');
        $aquario->descricao        = $request->get('descricao');
        $aquario->valor            = $request->get('valor');
        $aquario->data_desmontagem = $request->get('data_desmontagem');
        $aquario->save();

        return redirect('/aquario');
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
