<?php

namespace App\Http\Controllers;

use App\Tarea;
use App\Categoria;
use App\Estado;
use App\Prioridad;
use App\User;
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

        return view('tareaIndex', \compact('tareas')); //pasar datos de la vista, la variable no tiene el signo de $
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
        $users = User::pluck('name', 'id');
        $categorias = Categoria::pluck('nombre', 'id');
        $estados = Estado::pluck('nombre', 'id');
        $prioridades = Prioridad::pluck('nombre', 'id');
        return view('form_tareas', \compact('users','categorias', 'estados', 'prioridades'));
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
        $tarea->prioridad_id = $request->prioridad_id;
        $tarea->estado_id = $request->estado_id;
        $tarea->user_id = $request->user_id;
        $tarea->fecha_terminado = $request->fecha_terminado;

        if($request->terminado){
            $tarea->terminado = 1;
        }
        else{
            $tarea->terminado = 0;
        }
        $tarea->save();
        return redirect()->action('TareasController@index');
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
        return view('Tareaview', \compact('tarea'));

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
        return view('form_tareas', \compact('tarea', 'categorias', 'estados', 'prioridades'));
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
