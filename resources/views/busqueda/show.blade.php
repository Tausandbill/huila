@extends('app')
@section('content')
<div class="offset-3 mt-5">
    <a href="/cuidadores" class="text-reset">
        <h1><i class="bi bi-arrow-left"></i></h1>
    </a>
</div>
<div class=" col-md-10 col-sm-12 col-xs-12 card mt-5">
    <div class="card-header d-flex justify-content-md-between">
        <h4>Lista de Cuidadores</h4>
    </div>
    <div class="card-body">

        @if (count($cuidadores) == 0)
        <h5>No existe</h5>
        @else
        <table style="border-collapse: separate; border-spacing: 20px 0;">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Relacion</th>
                    <th>Telefono</th>
                    <th>Cedula</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cuidadores as $cuidador)
                <tr>
                    <td class="py-3">{{$cuidador->nombre}} {{$cuidador->apellido}}</td>
                    <td class="py-3">{{$cuidador->relacion}}</td>
                    <td class="py-3">{{$cuidador->telefono}}</td>
                    <td class="py-3">{{$cuidador->cedula}}</td>
                    <td class="py-3">{{$cuidador->email}}</td>
                    <td class="py-3">{{$cuidador->direccion}}</td>
                    <td><a class="btn btn-sm btn btn-outline-warning mr-5"
                            href="/cuidadores/{{$cuidador->id}}/edit">Editar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

</div>

@endsection