<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aviso as Aviso;
class AvisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $avisos = Aviso::orderBy('id', 'desc')->get();
     return view('admin.aviso.index', compact('avisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.aviso.create');
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
        $aviso = new Aviso;
        $aviso->contenido = $request->input('contenido');
        $aviso->url = $request->input('url');
        if($request->input('estado')=="on"){ $aviso->estado_id = 1; }else{ $aviso->estado_id = 2;}
        $aviso->save();
        return redirect('/admin/avisos');
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
        $aviso = Aviso::find($id);

        return view('admin.aviso.edit', compact('aviso'));
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
        $aviso = Aviso::find($id);
        $aviso->contenido = $request->input('contenido');
        $aviso->url = $request->input('url');
        if($request->input('estado')=="on"){ $aviso->estado_id = 1; }else{ $aviso->estado_id = 2;}
        $aviso->save();
       return redirect('/admin/avisos');
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
        Aviso::destroy($id);
        return redirect('/admin/avisos');
    }
}
