<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Competencia as Competencia;

class CompetenciaController extends Controller
{

  public function index()
  {
 $competencias = Competencia::orderBy('id', 'asc')->get();
return view('admin.competencia.index', compact('competencias'));

  }


  public function create()
  {
      return view('admin.competencia.create');
  }


  public function store(Request $request)
  {
    $competencia = new Competencia;
    $competencia->nombre = $request->input('nombre');
    $competencia->sufijo_titulo = $request->input('sufijo');
    $competencia->descripcion = $request->input('descripcion');
    $competencia->save();
    return redirect('/admin/competencias');
  }


  public function show($id)
  {
      //
  }


  public function edit($id)
  {
    $competencia = Competencia::find($id);

    return view('admin.competencia.edit', compact('competencia'));
  }


  public function update(Request $request, $id)
  {

    $competencia = Competencia::find($id);
    $competencia->nombre = $request->input('nombre');
    $competencia->sufijo_titulo = $request->input('sufijo');
    $competencia->descripcion = $request->input('descripcion');
    $competencia->save();
   return redirect('/admin/competencias');


  }


  public function destroy($id)
  {
    Competencia::destroy($id);
    return redirect('/admin/competencias');
  }
}
