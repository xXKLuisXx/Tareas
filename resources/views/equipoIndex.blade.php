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
                <th scope="col">Equipo</th>
                <th scope="col">Integrantes</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($equipos as $equipo)
              <tr>
                <th scope="row">{{ $equipo->id }}</th>
                
                <th scope="row">{{ $equipo->nombre_equipo }}</th>
                @foreach ($equipo->users as $user)
                <th scope="row">{{ $user->name }}</th>
                @endforeach
                

                <td>
                  <div>
                    <a class="btn btn-warning" href="{{ action('EquipoController@edit', $equipo) }}" role="button">Editar</a>
                  </div> </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <div>
            <a class="btn btn-success float-right" href="{{ action('TareasController@create', $equipo) }}" role="button">Agregar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection