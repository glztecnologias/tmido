<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Evaluacion as Evaluacion;
use App\Publicacion as Publicacion;
use App\Tipo_evaluacion as Tipo_evaluacion;
use App\Descriptor_evaluacion as Descriptor_evaluacion;
use App\Competencia as Competencia;
class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id,$id_com)
    {

      if($id_com=="null" AND $id>0)
      {
        $publicacion = Publicacion::where('id',$id)->first();
        $tipo_evaluacion = Tipo_evaluacion::orderBy('id', 'desc')->get();
        return view('admin.evaluacion.create',compact('tipo_evaluacion','publicacion'));

      }
      if($id=="null")
      {

        $competencia = Competencia::where('id',$id_com)->first();
        $tipo_evaluacion = Tipo_evaluacion::orderBy('id', 'desc')->get();
        return view('admin.evaluacion.create',compact('tipo_evaluacion','competencia'));
        //return $id." ".$id_com;
      }


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
        $evaluacion = new Evaluacion;
        $evaluacion->nombre = $request->input('nombre');
        $evaluacion->descripcion = $request->input('descripcion');
        $evaluacion->instrucciones = $request->input('instrucciones');
        $evaluacion->f_termino = $request->input('f_termino');
        $publicacion=$request->input('publicaciones_id');
        $competencia=$request->input('competencia_id');

        if(isset($publicacion))
        {
          $evaluacion->publicaciones_id = $request->input('publicaciones_id');
          $evaluacion->competencia_id = null;
        }

        if(isset($competencia))
        {
          $evaluacion->competencia_id = $request->input('competencia_id');
          $evaluacion->publicaciones_id = null;
        }

        $evaluacion->tipo_evaluacion_id = $request->input('tipo_evaluacion');
        $evaluacion->save();

        if(isset($publicacion))
        {
          $eva = Evaluacion::where('publicaciones_id',$evaluacion->publicaciones_id)->first();
          $id_eval=$eva->id;
        }
        if(isset($competencia))
        {
          $eva = Evaluacion::where('competencia_id',$evaluacion->competencia_id)->first();
          $id_eval=$eva->id;
        }

        $id_tipo_eval=$request->input('tipo_evaluacion');
        $tipo_evaluacion = Tipo_evaluacion::where('id',  $id_tipo_eval)->first();
        $clas_tipo_evaluacion =  $tipo_evaluacion->clasificacion;

        if($clas_tipo_evaluacion!="votacion")
        {
            $cantidad_items = $request->input('cantidad');
            $i=1;
            while($i<=$cantidad_items)
            {
              $descriptor = new Descriptor_evaluacion;

              //$descriptor->nombre = $request->input('item_'.$i);
              $descriptor->descripcion = $request->input('item_'.$i);
              $descriptor->pregunta = $request->input('item_'.$i);
              $descriptor->evaluaciones_id = $id_eval;
              $descriptor->save();
              $i++;
            }
        }


        if(isset($publicacion))
        {
          return redirect('/admin/publicaciones');
        }

        if(isset($competencia))
        {
          return redirect('/admin/competencias');
        }



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

        $tipos_evaluacion = Tipo_evaluacion::orderBy('id', 'desc')->get();
        $publicacion = Publicacion::where('id',$id)->first();
        $evaluacion = Evaluacion::where('publicaciones_id',$id)->first();

        if(isset($evaluacion))
        {
          $ideva=$evaluacion->id;
          $descriptores = Descriptor_evaluacion::where('evaluaciones_id',$ideva)->get();
          return view('admin.evaluacion.edit',compact('publicacion','evaluacion','descriptores','tipos_evaluacion'));
        }
        else
        {
          return redirect('/admin/publicaciones');
        }




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
    public function destroy($id,$id_com)
    {
        //
        $eval = Evaluacion::where('publicaciones_id',$id)->first();
        $id_eval = $eval->id;
        Descriptor_evaluacion::where('evaluaciones_id',$id_eval)->delete();

        $eval->delete();   //Evaluacion::destroy($eval->id);
        //$descriptores->forceDelete();

        return redirect('/admin/publicaciones');
    }
}
