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

      if($request->input('act_megusta')=="on"){ $publicacion->act_megusta = "on"; }else{ $publicacion->act_megusta = "off";}
      if($request->input('act_comentarios')=="on"){ $publicacion->act_comentarios = "on"; }else{ $publicacion->act_comentarios = "off";}
      if($request->input('act_valoracion')=="on"){ $publicacion->act_valoracion = "on"; }else{ $publicacion->act_valoracion = "off";}
      if($request->input('act_comparte')=="on"){ $publicacion->act_comparte = "on"; }else{ $publicacion->act_comparte = "off";}
      if($request->input('act_graficos')=="on"){ $publicacion->act_graficos = "on"; }else{ $publicacion->act_graficos = "off";}
      if($request->input('act_evaluacion')=="on"){ $publicacion->act_evaluacion = "on"; }else{ $publicacion->act_evaluacion = "off";}
      if($request->input('act_recursos')=="on"){ $publicacion->act_recursos = "on"; }else{ $publicacion->act_recursos = "off";}
      if($request->input('act_regresiva')=="on"){ $publicacion->act_regresiva = "on"; }else{ $publicacion->act_regresiva = "off";}

        $comp_id = $request->input('competencia');
        $publicacion->competencia_id = $request->input('competencia');
        $publicacion->categoria_id = $request->input('categoria');
        $publicacion->estado_id = $request->input('estado');

        $comp = Competencia::where('id',$comp_id)->first();
        if(isset($comp)){
          $cant_participa = $comp->cant_participa;
        }else{
          $cant_participa = null;
        }


        $cant_publ = Publicacion::where('competencia_id',$comp_id)->count();


        if($cant_participa>$cant_publ || $cant_participa == null){
          $publicacion->save();
          return redirect('/admin/publicaciones');
        }else{
          $mensaje = "<div class='header'>La competencia '".$comp->nombre."' llego a su limite de ".$cant_participa." participantes y no admite mas publicaciones!<div>...<br>Edite la competencia o elimine publicaciones innecesarias<br>Atte. Administrador.";
          $publicaciones = Publicacion::orderBy('id', 'desc')->get();
          return view('admin.publicacion.index', compact('publicaciones','mensaje'));
        }

    }


    public function show($id)
    {
        $publicacion = Publicacion::find($id);
        return view('admin.publicacion.show', compact('publicacion'));
    }

    public function edit($id)
    {
        $publicacion = Publicacion::find($id);
        $categorias = Categoria::orderBy('id', 'desc')->get();
        $competencias = Competencia::orderBy('id', 'desc')->get();
        $estados = Estado::orderBy('id', 'desc')->get();
        return view('admin.publicacion.edit', compact('publicacion','categorias','competencias','estados'));
    }

    public function update(Request $request, $id)
    {
        $publicacion = Publicacion::find($id);

        $publicacion->titulo = $request->input('titulo');
        $publicacion->descripcion_corta = $request->input('descripcion_corta');
        $publicacion->descripcion_larga = $request->input('descripcion_larga');
        $publicacion->url_foto = $request->input('url_foto');

      if($request->input('act_megusta')=="on"){ $publicacion->act_megusta = "on"; }else{ $publicacion->act_megusta = "off";}
      if($request->input('act_comentarios')=="on"){ $publicacion->act_comentarios = "on"; }else{ $publicacion->act_comentarios = "off";}
      if($request->input('act_valoracion')=="on"){ $publicacion->act_valoracion = "on"; }else{ $publicacion->act_valoracion = "off";}
      if($request->input('act_comparte')=="on"){ $publicacion->act_comparte = "on"; }else{ $publicacion->act_comparte = "off";}
      if($request->input('act_graficos')=="on"){ $publicacion->act_graficos = "on"; }else{ $publicacion->act_graficos = "off";}
      if($request->input('act_evaluacion')=="on"){ $publicacion->act_evaluacion = "on"; }else{ $publicacion->act_evaluacion = "off";}
      if($request->input('act_recursos')=="on"){ $publicacion->act_recursos = "on"; }else{ $publicacion->act_recursos = "off";}
      if($request->input('act_regresiva')=="on"){ $publicacion->act_regresiva = "on"; }else{ $publicacion->act_regresiva = "off";}

        $comp_id = $request->input('competencia');
        $publicacion->competencia_id = $request->input('competencia');
        $publicacion->categoria_id = $request->input('categoria');
        $publicacion->estado_id = $request->input('estado');


        $comp = Competencia::where('id',$comp_id)->first();
        if(isset($comp)){
          $cant_participa = $comp->cant_participa;
        }else{
          $cant_participa = null;
        }


        $cant_publ = Publicacion::where('competencia_id',$comp_id)->count();


        if($cant_participa>$cant_publ || $cant_participa == null){
          $publicacion->save();
          return redirect('/admin/publicaciones');
        }else{
          $mensaje = "<div class='header'>La competencia '".$comp->nombre."' llego a su limite de ".$cant_participa." participantes y no admite mas publicaciones!<div>...<br>Edite la competencia o elimine publicaciones innecesarias<br>Atte. Administrador.";
          $publicaciones = Publicacion::orderBy('id', 'desc')->get();
          return view('admin.publicacion.index', compact('publicaciones','mensaje'));
        }



        //$publicacion->save();
        //return redirect('/admin/publicaciones/'.$id);
        //return redirect('/admin/publicaciones');
    }

    public function destroy($id)
    {
        Publicacion::destroy($id);
        return redirect('/admin/publicaciones');
    }
}
