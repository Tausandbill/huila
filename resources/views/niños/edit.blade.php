@extends('app')
@section('content')
<div class="offset-3 mt-5">
    <a href="/niños" class="text-reset">
        <h1><i class="bi bi-arrow-left"></i></h1>
    </a>
</div>
<div class="card mt-4 col-md-6 col-sm-10 ">
    <div class="card-header d-flex justify-content-md-between">
        <h4>Editar Información de Niño</h4>
    </div>
    <div class="card-body">
        <form id="form" method="POST" action="/niños/{{$niño->id}}">
            @method('PUT')
            @csrf
            <div class="form-group mb-2">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{$niño->nombre}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" id="apellido" value="{{$niño->apellido}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="genero">Genero</label>
                <select class="form-select" name="genero" aria-label="Default select example">
                    @if ($niño->genero == 'masculino')
                        <option value="masculino" selected>masculino</option>
                        <option value="femenino">femenino</option>
                    @else
                        <option value="masculino">masculino</option>
                        <option value="femenino" selected>femenino</option>
                    @endif
                </select>
            </div>

            <div class="form-group mb-2">
                <label for="registro_civil">Numero de Registro Civil</label>
                <input type="text" name="registro_civil" class="form-control" id="registro_civil" value="{{$niño->registro_civil}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="nacimiento">Fecha de Nacimiento</label>
                <input type="date" name="nacimiento" class="form-control" id="nacimiento" value="{{$niño->nacimiento}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="ingreso">Fecha de Ingreso</label>
                <input type="date" name="ingreso" class="form-control" id="ingreso" value="{{$niño->ingreso}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="medico">Medico</label>
                <input type="text" name="medico" class="form-control" id="medico" value="{{$niño->medico}}" required>
            </div>
            <div class="form-group mb-2">
                <label for="alergias">Alergias</label>
                <textarea class="form-control" name="alergias" id="alergias" rows="3">{{$niño->alergias}}</textarea>
            </div>
            <div class="form-group mb-2">
                <label for="cometarios">Comentarios</label>
                <textarea class="form-control" name="cometarios" id="cometarios" rows="3">{{$niño->cometarios}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

@endsection