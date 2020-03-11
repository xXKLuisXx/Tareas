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

          @if (isset($equipo))
          {{ Form::open(['action' => ['EquipoController@update', $equipo], 'method' => 'put'])}}

          @else
          {{ Form::open(['action' => 'EquipoController@update'])}}
          @endif
          <div class="form-row">
            <div class="form-group col-md-6">
              {{ Form::label('nombre_equipo', 'Equipo')}}
              {{ Form::text('nombre_equipo', isset($equipo->nombre_equipo) ? $equipo->nombre_equipo : null , ['class' => ($errors->has('nombre_equipo')) ? 'form-control is-invalid' : 'form-control'])}}
            </div>
            <div class="form-group col-md-6">
              {{ Form::label('user_id', 'Integrantes')}}
              {{ Form::select('user_id[]', $users , null, ['class' => 'form-control', 'multiple' ] )}}
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