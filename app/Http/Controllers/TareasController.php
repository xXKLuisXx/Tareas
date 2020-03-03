<?php

namespace App\Http\Controllers;

use App\Tarea;
use Illuminate\Http\Request;

class TareasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tareas = Tarea::all();
        //dd($tareas);

        return view('form_tareas', \compact('tareas')); //pasar datos de la vista, la variable no tiene el signo de $

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarea = new Tarea();
        $request->validate([
            'nombre_tarea' =>'required',
            'categoria_id' =>'required',
            'prioridad' =>'required',
            'estatus' =>'required',
            'fecha_terminado' =>'required | date',
            'user_id' => 'required'


        ]);
        $tarea->nombre_tarea = $request->nombre_tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->categoria_id = $request->categoria_id;
        $tarea->prioridad = $request->prioridad;
        $tarea->estatus = $request->estatus;
        $tarea->user_id = $request->user_id;
        $tarea->fecha_terminado = $request->fecha_terminado;

        if($request->terminado){
            $tarea->terminado = 1;
        }
        else{
            $tarea->terminado = 0;
        }
        $tarea->save();
        return redirect()->route('home');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        //
    }
}
