@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Vista general</div>

        <div class="card-body">
          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
          <div class="card text-center">
            <div class="card-header">
              <div class="row">
                <div class="col-4">
                  <h5 class="float-left">{{$tarea->id}}</h5>
                </div>
                <div class="col-4">
                  <h4>{{$tarea->nombre_tarea}}</h4>
                </div>
                <div class="col-4">
                  <h5 class="float-right">{{$tarea->user->name}}</h5>
                </div>

              </div>
            </div>
            <div class="card-body">

              <h5 class="card-title"> Descripción </h5>
              <p class="card-text">{{$tarea->descripcion}}</p>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"> </li>
                <li class="list-group-item">Categoría: {{$tarea->categoria->nombre}}</li>
                <li class="list-group-item">
                  <div class="row border-success table-bordered">
                    <div class="col-4">Terminado </div>
                    <div class="col-4">Prioridad </div>
                    <div class="col-4">Estado </div>
                  </div>
                  <div class="row">
                    <div class="col-4">
                      @if ($tarea->terminado)
                          Si
                      @else
                          No
                      @endif
                    </div>
                    <div class="col-4">{{$tarea->prioridad->nombre}} </div>
                    <div class="col-4">{{$tarea->estado->nombre}} </div>
                  </div>
                </li>
                <li class="list-group-item">Fecha inicio: {{$tarea->created_at}}</li>
                <li class="list-group-item">Fecha terminado: {{$tarea->fecha_terminado}}</li>  
                <li class="list-group-item">Última vez modificado: {{$tarea->updated_at}}</li>
              </ul>

              <a href="#" class="btn btn-primary">Editar</a>
            </div>
            <div class="card-footer text-muted">
              Eliminar
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection