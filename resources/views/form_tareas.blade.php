@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Agregar tarea</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif

          @if (isset($tarea))
          {{ Form::open(['action' => ['TareasController@update', $tarea], 'method' => 'put'])}}

          @else
          {{ Form::open(['action' => 'TareasController@store'])}}
          @endif
          <div class="form-row">
            <div class="form-group col-md-6">
              {{ Form::label('nombre_tarea', 'Nombre')}}
              {{ Form::text('nombre_tarea', isset($tarea->nombre_tarea) ? $tarea->nombre_tarea : null , ['class' => ($errors->has('nombre_tarea')) ? 'form-control is-invalid' : 'form-control'])}}
            </div>
            <div class="form-group col-md-6">
              {{ Form::label('categoria_id', 'Categoría')}}
              {{ Form::select('categoria_id', $categorias , isset($tarea->categoria_id) ? $tarea->categoria->nombre : '1', ['class' => 'form-control' ] )}}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              {{ Form::label('user_id', 'Usuario')}}
              {{ Form::select('user_id', $users,
                isset($tarea->user_id) ? $tarea->user->name : '1', ['class' => 'form-control'] )}}
            </div>
            <div class="form-group col-md-4">
              {{ Form::label('prioridad_id', 'Prioridad')}}
              {{ Form::select('prioridad_id', $prioridades, isset($tarea->prioridad_id) ? $tarea->prioridad->nombre : '1', ['class' => 'form-control'] )}}
            </div>
            <div class="form-group col-md-4">
              {{ Form::label('estado_id', 'Estado')}}
              {{ Form::select('estado_id', $estados, isset($tarea->estado_id) ? $tarea->estado->nombre : '1', ['class' => 'form-control'] )}}
            </div>
          </div>
          <div class="form-group">
            {{ Form::label('fecha_terminado', 'Fecha de termino')}}
            {{ Form::date('fecha_terminado', isset($tarea->fecha_terminado) ? $tarea->fecha_terminado : null, ['class' => 'form-control'])}}
          </div>

          <div class="form-group">
            {{ Form::label('descripcion', 'Descripción')}}
            {{ Form::text('descripcion', isset($tarea->descripcion) ? $tarea->descripcion : null, ['class' => ($errors->has('descripcion')) ? 'form-control is-invalid' : 'form-control'])}}
          </div>

          <div class="form-group">
            <div class="form-check">
              {{ Form::label('terminado', 'Terminado')}}
              {{ Form::checkbox('terminado', 'value', isset($tarea->terminado) ? $tarea->terminado : false )}}
            </div>
          </div>
          @if (isset($tarea))
          <button type="submit" class="btn btn-primary float-right">Modificar</button>
          @else
          <button type="submit" class="btn btn-primary float-right">Agregar</button>
          @endif
          {{ Form::close()}}
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection