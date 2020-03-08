@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8" style="max-width: 80%">
      <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
          {{ session('status') }}
        </div>
        @endif
      </div>
      <div class="card">
        <div class="card-header">Tareas</div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Entrega</th>
                <th scope="col">Usuario</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tareas as $tarea)
              <tr>
                <th scope="row">{{ $tarea->id }}</th>
                <td>{{ $tarea->nombre_tarea }}</td>
                <td>{{ $tarea->descripcion }}</td>
                <td>{{ $tarea->fecha_terminado }}</td>
                <td>{{ $tarea->user->name }}</td>
                <td>
                  <div>
                    <a class="btn btn-primary" href="{{ action('TareasController@show', $tarea->id) }}" role="button">Ver</a>
                  </div> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <div>
            <a class="btn btn-success float-right" href="{{ action('TareasController@create', $tarea->id) }}" role="button">Agregar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection