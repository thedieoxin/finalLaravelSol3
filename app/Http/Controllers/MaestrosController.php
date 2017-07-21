<?php

namespace Chasquillas\Http\Controllers;

use Illuminate\Http\Request;

use Chasquillas\Http\Requests;
use Chasquillas\Http\Controllers\Controller;

class MaestrosController extends Controller {

    public function index(){
        $maestros = \Chasquillas\Maestros::All();
        return view('maestros.index',compact('maestros'));
        }

    public function create(){
        return view('maestros.create');
        }

    public function store(Request $request)
        {
        $file   = $request->file('foto');
        $nomimg = $file->getClientOriginalName();

        \Chasquillas\Maestros::create([
            'nombre'		=> $request['nombre'],
            'apellido'		=> $request['apellido'],
            'correo'		=> $request['correo'],
            'telefono'		=> $request['telefono'],
            'descripcion'	=> $request['descripcion'],
            'foto'		=> $nomimg,
            'categorias_id'	=> $request['categorias_id'],
            ]);
        \Storage::disk('local')->put($nomimg, \File::get($file));
        return view('maestros.create');
        }

    public function show($id){
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
        //
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
        //
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
