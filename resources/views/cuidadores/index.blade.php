@extends('app')
@section('content')
<div class="offset-3 mt-5">
    <a href="/niños" class="text-reset">
        <h1><i class="bi bi-arrow-left"></i></h1>
    </a>
</div>
<div class=" col-md-6 col-sm-10 card mt-5">
    <div class="card-header">
        <h3>Buscar Cuidadores</h3>
    </div>
    <div class="card-body">
        <form id="form" method="GET" action="/busqueda">
            @csrf
            <div class="form-group mb-2">
                <label for="tipo">Tipo de busqueda</label>
                <select class="form-select" name="tipo" aria-label="Default select example">
                    <option selected>Escoger tipo</option>
                    <option value="cedula">Cedula</option>
                    <option value="registro">Registro Civil</option>
                </select>
            </div>
            <div class="form-group mb-2">
                <label for="numero">Numero</label>
                <input type="text" name="numero" class="form-control" id="numero" required>
            </div>                  
        
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>

</div>

@endsection