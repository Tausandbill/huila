@extends('app')
@section('content')
<div class="offset-3 mt-5">
    <a href="/cuidadores/{{$niño}}" class="text-reset">
        <h1><i class="bi bi-arrow-left"></i></h1>
    </a>
</div>
<div class="card mt-4 col-md-6 col-sm-10 ">
    <div class="card-header d-flex justify-content-md-between">
        <h4>Crear Cuidador</h4>
    </div>
    <div class="card-body">
        <form id="form" method="POST" action="/cuidadores/{{$niño}}">
            @csrf
            <div class="form-group mb-2">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" required>
            </div>
            <div class="form-group mb-2">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" required>
            </div>
            <div class="form-group mb-2">
                <label for="relacion">Relación</label>
                <select class="form-select" name="relacion" aria-label="Default select example">
                    <option selected>Escoger relacion</option>
                    <option value="Padre">Padre</option>
                    <option value="Madre">Madre</option>
                    <option value="Acudiente">Acudiente</option>
                </select>
            </div>
            
            <div class="form-group mb-2">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" class="form-control" id="cedula" required>
                <small id="cedula" class="form-text text-muted">Digitar cedula sin puntos</small>
            </div>
            <div class="form-group mb-2">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group mb-2">
                <label for="telefono">Celular</label>
                <input type="text" name="telefono" class="form-control" id="telefono" required>
            </div>
            <div class="form-group mb-2">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" id="direccion" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection