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
          @else
          {{ Form::open(['action' => 'TareasController@store'])}}
          @endif
          <div class="form-row">
            <div class="form-group col-md-6">
              {{ Form::label('nombre_tarea', 'Nombre')}}
              {{ Form::text('nombre_tarea', null, ['class' => ($errors->has('nombre_tarea')) ? 'form-control is-invalid' : 'form-control'])}}
            </div>
            <div class="form-group col-md-6">
              {{ Form::label('categoria_id', 'Categoría')}}
              {{ Form::select('categoria_id', $categorias ,
                isset($tarea) ? $tarea->categoria_id : '1', ['class' => 'form-control' ] )}}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-4">
              {{ Form::label('user_id', 'Usuario')}}
              {{ Form::select('user_id', $users,
                isset($tarea) ? $tarea->user_id : '1', ['class' => 'form-control'] )}}
            </div>
            <div class="form-group col-md-4">
              {{ Form::label('prioridad_id', 'Prioridad')}}
              {{ Form::select('prioridad_id', $prioridades,
                isset($tarea) ? $tarea->prioridad : '1', ['class' => 'form-control'] )}}
            </div>
            <div class="form-group col-md-4">
              {{ Form::label('estado_id', 'Estado')}}
              {{ Form::select('estado_id', $estados,
                isset($tarea) ? $tarea->estatus : '1', ['class' => 'form-control'] )}}
            </div>
          </div>
          <div class="form-group">
            {{ Form::label('fecha_terminado', 'Fecha de termino')}}
            {{ Form::date('fecha_terminado', null, ['class' => 'form-control'])}}
          </div>

          <div class="form-group">
            {{ Form::label('descripcion', 'Descripción')}}
            {{ Form::text('descripcion', null, ['class' => ($errors->has('descripcion')) ? 'form-control is-invalid' : 'form-control'])}}
          </div>

          <div class="form-group">
            <div class="form-check">
              {{ Form::label('terminado', 'Terminado')}}
              {{ Form::checkbox('terminado', 'value', isset($tarea) ? $tarea->terminado : false )}}
            </div>
          </div>
          <button type="submit" class="btn btn-primary float-right">Agregar</button>
          {{ Form::close()}}
          
        </div>
      </div>
    </div>
  </div>
</div>
@endsection