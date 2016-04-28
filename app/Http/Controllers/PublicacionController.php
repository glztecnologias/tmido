<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Publicacion as Publicacion;
use App\Categoria as Categoria;
use App\Competencia as Competencia;
use App\Estado as Estado;

class PublicacionController extends Controller
{

    public function index()
    {
        $publicaciones = Publicacion::orderBy('id', 'desc')->get();
        return view('admin.publicacion.index', compact('publicaciones'));
    }


    public function create()
    {

        $categorias = Categoria::orderBy('id', 'desc')->get();
        $competencias = Competencia::orderBy('id', 'desc')->get();
        $estados = Estado::orderBy('id', 'desc')->get();
        return view('admin.publicacion.create',compact('categorias','competencias','estados'));
    }

    public function store(Request $request)
    {
        $publicacion = new Publicacion;
        $publicacion->titulo = $request->input('titulo');
        $publicacion->descripcion_corta = $request->input('descripcion_corta');
        $publicacion->descripcion_larga = $request->input('descripcion_larga');
        $publicacion->url_foto = $request->input('url_foto');

        $publicacion->competencia_id = $request->input('competencia');
        $publicacion->categoria_id = $request->input('categoria');
        $publicacion->estado_id = $request->input('estado');

        $publicacion->save();
        return redirect('/admin/publicaciones');
    }


    public function show($id)
    {
        $publicacion = Publicacion::find($id);
        return view('admin.publicacion.show', compact('publicacion'));
    }

    public function edit($id)
    {
        $publicacion = Publicacion::find($id);

        return view('admin.publicacion.edit', compact('publicacion'));
    }

    public function update(Request $request, $id)
    {
        $publicacion = Publicacion::find($id);
        $publicacion->titulo = $request->input('titulo');
        $publicacion->descripcion_corta = $request->input('descripcion_corta');
        $publicacion->descripcion_larga = $request->input('descripcion_larga');
        //$publicacion->contador = $request->input('contador');
        $publicacion->url_foto = $request->input('url_foto');
        $publicacion->competencia_id = $request->input('competencia');
        $publicacion->categoria_id = $request->input('categoria');
        $publicacion->save();


        return redirect('/admin/publicaciones/'.$id);
    }

    public function destroy($id)
    {
        Publicacion::destroy($id);
        return redirect('/admin/publicaciones');
    }
}
