<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tipo_evaluacion as Tipo_evaluacion;

class Tipo_evaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tipo_evaluacion = Tipo_evaluacion::orderBy('id', 'desc')->get();
       return view('admin.tipo_evaluacion.index', compact('tipo_evaluacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tipo_evaluacion.create');
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
        $tipo_evaluacion = new Tipo_evaluacion;

        $tipo_evaluacion->descripcion = $request->input('descripcion');
        $tipo_evaluacion->clasificacion = $request->input('clasificacion');
        $tipo_evaluacion->save();
        return redirect('/admin/tipo_evaluacion');
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
        $tipo_evaluacion = Tipo_evaluacion::find($id);

        return view('admin.tipo_evaluacion.edit', compact('tipo_evaluacion'));
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
        $tipo_evaluacion = Tipo_evaluacion::find($id);
        $tipo_evaluacion->nombre = $request->input('nombre');
        $tipo_evaluacion->descripcion = $request->input('descripcion');
        $tipo_evaluacion->save();
       return redirect('/admin/tipo_evaluacion');
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
        Tipo_evaluacion::destroy($id);
        return redirect('/admin/tipo_evaluacion');
    }
}
