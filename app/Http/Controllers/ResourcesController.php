<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ResourcesController extends Controller
{

    public function index()
    {
        //return view('testing.index');
    }

    public function create()
    {
      $data = sizeof($_POST) > 0 ? $_POST : json_decode($request->getContent(), true);
      //$data = $request->all();
      //var_dump($data);
      User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => $data['password'],
       ]);
      return "Created!";
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
