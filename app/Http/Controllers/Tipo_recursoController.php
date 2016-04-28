<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipo_recurso as Tipo_recurso;
class Tipo_recursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //
      $tipo_recursos = Tipo_recurso::orderBy('id', 'desc')->get();
     return view('admin.tipo_recurso.index', compact('tipo_recursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                return view('admin.tipo_recurso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $tipo_recurso = new Tipo_recurso;
        $tipo_recurso->nombre = $request->input('nombre');
        $tipo_recurso->descripcion = $request->input('descripcion');
        $tipo_recurso->save();
        return redirect('/admin/tipo_recursos');
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
        //
        $tipo_recurso = Tipo_recurso::find($id);
        return view('admin.tipo_recurso.edit', compact('tipo_recurso'));
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
        $tipo_recurso = Tipo_recurso::find($id);
        $tipo_recurso->nombre = $request->input('nombre');
        $tipo_recurso->descripcion = $request->input('descripcion');
        $tipo_recurso->save();
       return redirect('/admin/tipo_recursos');
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
        Tipo_recurso::destroy($id);
        return redirect('/admin/tipo_recursos');
    }
}
