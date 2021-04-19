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
        <div class="form-group mb-2">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{$niño->nombre}}" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="apellido" value="{{$niño->apellido}}" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="genero">Genero</label>
            <input type="text" name="genero" class="form-control" id="genero" value="{{$niño->genero}}" readonly>
        </div>

        <div class="form-group mb-2">
            <label for="registro">Numero de Registro Civil</label>
            <input type="text" name="registro" class="form-control" id="registro" value="{{$niño->registro_civil}}"
                readonly>
        </div>
        <div class="form-group mb-2">
            <label for="nacimiento">Fecha de Nacimiento</label>
            <input type="date" name="nacimiento" class="form-control" id="nacimiento" value="{{$niño->nacimiento}}"
                readonly>
        </div>
        <div class="form-group mb-2">
            <label for="ingreso">Fecha de Ingreso</label>
            <input type="date" name="ingreso" class="form-control" id="ingreso" value="{{$niño->ingreso}}" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="medico">Medico</label>
            <input type="text" name="medico" class="form-control" id="medico" value="{{$niño->medico}}" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="alergias">Alergias</label>
            <textarea class="form-control" name="alergias" id="alergias" rows="3" readonly>{{$niño->alergias}}</textarea>
        </div>
        <div class="form-group mb-2">
            <label for="comentarios">Comentarios</label>
            <textarea class="form-control" name="comentarios" id="comentarios"
                rows="3" readonly>{{$niño->cometarios}}</textarea>
        </div>
    </div>
</div>

@endsection