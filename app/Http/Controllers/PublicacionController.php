<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Publicacion as Publicacion;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Publicacion::orderBy('id', 'desc')->get();
        return view('admin.publicacion.index', compact('publicaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.publicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacion = new Publicacion;
        $publicacion->titulo = $request->input('titulo');
        $publicacion->descripcion_corta = $request->input('descripcion_corta');
        $publicacion->descripcion_larga = $request->input('descripcion_larga');
        $publicacion->url_foto = $request->input('url_foto');
        $publicacion->save();


        return redirect('/admin/publicaciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $publicacion = Publicacion::find($id);
        return view('admin.publicacion.show', compact('publicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::find($id);

        return view('admin.publicacion.edit', compact('publicacion'));
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
        $publicacion = Publicacion::find($id);
        $publicacion->titulo = $request->input('titulo');
        $publicacion->descripcion_corta = $request->input('descripcion_corta');
        $publicacion->descripcion_larga = $request->input('descripcion_larga');
        $publicacion->contador = $request->input('contador');
        $publicacion->url_foto = $request->input('url_foto');
        $publicacion->save();


        return redirect('/admin/publicaciones/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Publicacion::destroy($id);
        return redirect('/admin/publicaciones');
    }
}
