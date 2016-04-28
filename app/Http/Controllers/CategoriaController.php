<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Categoria as Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   $categorias = Categoria::orderBy('id', 'desc')->get();
  return view('admin.categoria.index', compact('categorias'));
    //  return view('admin.categoria.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $categoria = new Categoria;
      $categoria->nombre = $request->input('nombre');
      $categoria->nombre_url = $request->input('nombre_url');
      $categoria->descripcion = $request->input('color');
      $categoria->save();
      return redirect('/admin/categorias');
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
      $categoria = Categoria::find($id);

      return view('admin.categoria.edit', compact('categoria'));
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

      $categoria = Categoria::find($id);
      $categoria->nombre = $request->input('nombre');
      $categoria->nombre_url = $request->input('nombre_url');
      $categoria->descripcion = $request->input('color');
      $categoria->save();
     return redirect('/admin/categorias');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Categoria::destroy($id);
      return redirect('/admin/categorias');
    }
}
