@extends('app')
@section('content')
<div class="offset-3 mt-5">
    <a href="{{ url()->previous() }}" class="text-reset">
        <h1><i class="bi bi-arrow-left"></i></h1>
    </a>
</div>
<div class="card mt-4 col-md-6 col-sm-10 ">
    <div class="card-header d-flex justify-content-md-between">
        <h4>Editar Cuidador</h4>
    </div>
    <div class="card-body">
        <form id="form" method="POST" action="/cuidadores/{{$cuidador->id}}">
            @method('PUT')
            @csrf
            <div class="form-group mb-2">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{$cuidador->nombre}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" value="{{$cuidador->apellido}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="relacion">Relación</label>
                <select class="form-select" name="relacion" aria-label="Default select example">
                    <option selected>Escoger relacion</option>
                    <option value="Padre" {{$cuidador->relacion == 'Padre' ? 'selected' : ''}}>Padre</option>
                    <option value="Madre" {{$cuidador->relacion == 'Madre' ? 'selected' : ''}}>Madre</option>
                    <option value="Acudiente" {{$cuidador->relacion == 'Acudiente' ? 'selected' : ''}}>Acudiente</option>
                </select>
            </div>

            <div class="form-group mb-2">
                <label for="cedula">Cedula</label>
                <input type="text" name="cedula" class="form-control" id="cedula" value="{{$cuidador->cedula}}" required>
                <small id="cedula" class="form-text text-muted">Digitar cedula sin puntos</small>
            </div>
            <div class="form-group mb-2">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" value="{{$cuidador->email}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="telefono">Celular</label>
                <input type="text" name="telefono" class="form-control" id="telefono" value="{{$cuidador->telefono}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" id="direccion" value="{{$cuidador->direccion}}" required>
            </div>
            <input type="hidden" name="url" value="{{ url()->previous() }}">

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection