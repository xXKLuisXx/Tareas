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
          <form action="{{ action('TareasController@store') }}" method="POST">
            <!-- dd($request->all()) -->
            <!-- el action crea la ruta, hacia donde va el formulario -->
            @csrf
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="nombre_tarea">Nombre</label>
                <input type="text" class="form-control" id="nombre_tarea" placeholder="Nombre" name="nombre_tarea" required>
              </div>
              <div class="form-group col-md-6">
                <label for="categoria_id">Categoria</label>
                <select id="categoria_id" class="form-control" name="categoria_id" required>
                  <option selected value="1"> 1 </option>
                  <option value="2"> 2 </option>
                  <option value="2"> 3 </option>
                </select>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="user_id">Usuario</label>
                  <select id="user_id" class="form-control" name="user_id" required>
                    <option selected value="1"> 1 </option>
                    <option value="2"> 2 </option>
                    <option value="2"> 3 </option>
                  </select>
              </div>
              <div class="form-group col-md-4">
                <label for="prioridad">Prioridad</label>
                  <select id="prioridad" class="form-control" name="prioridad" required>
                    <option selected value="1"> Alta </option>
                    <option value="2"> Media </option>
                    <option value="3"> Baja </option>
                  </select>
              </div>
              <div class="form-group col-md-4">
                <label for="estatus">Estatus</label>
                  <select id="estatus" class="form-control" name="estatus" required>
                    <option selected value="Iniciado"> Iniciado </option>
                    <option value="En proceso"> En proceso </option>
                    <option value="Terminado"> Terminado </option>
                  </select>
              </div>

            </div>

            <div class="form-group">
              <label for="fecha_terminado">Fecha de termino</label>
              <input type="date" class="form-control" id="fecha_terminado" placeholder="Usuario" name="fecha_terminado" required>
            </div>

            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <input type="text" class="form-control" id="descripcion" placeholder="Ejemplo actividades" name="descripcion" required>
            </div>

            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terminado" name="terminado">
                <label class="form-check-label" for="terminado">
                  Terminado
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection