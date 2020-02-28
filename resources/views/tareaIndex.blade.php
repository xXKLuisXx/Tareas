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

          <div>
              <div>
                  <table>
                      @foreach ($tareas as $tarea)
                        <tr>
                            <td> {{ $tarea->id }}</td>
                            
                            <td> {{ $tarea->nombre_tarea }}</td>
                            
                            <td> {{ $tarea->descripcion }}</td>
                        </tr>

                          
                      @endforeach
                  </table>
              </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection