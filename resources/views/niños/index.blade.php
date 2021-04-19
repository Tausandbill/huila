@extends('app')
@section('content')
<div class=" col-md-6 col-sm-10 card mt-5">
    <div class="card-header d-flex justify-content-md-between">
        <h4>Lista de Niños</h4>
        <a class="btn btn-sm btn btn-outline-success mr-5" href="/cuidadores">Buscar Cuidadores</a>
    </div>
    <div class="card-body">
        <table style="border-collapse: separate; border-spacing: 20px 0;">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Fecha de Nacimiento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($niños as $niño)
                <tr>
                    <td class="py-3">{{$niño->nombre}} {{$niño->apellido}}</td>
                    <td class="py-3">{{$niño->nacimiento}}</td>
                    <td><a class="btn btn-sm btn btn-outline-success mr-5" href="/niños/{{$niño->id}}">Ver</a></td>
                    <td><a class="btn btn-sm btn btn-outline-warning mr-5" href="/niños/{{$niño->id}}/edit">Editar</a></td>
                    <td><a class="btn btn-sm btn btn-outline-primary mr-5" href="/cuidadores/{{$niño->id}}">Ver Cuidadores</a></td>        
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection