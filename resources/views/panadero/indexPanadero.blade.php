@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@endif



@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<a href="{{url('panadero/create')}}" class="btn btn-success">Registrar nuevo panadero</a>
<br/>
<br/>
<table class="table table-dark">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Móvil</th>
            <th>DNI</th>
            <th>Correo Electrónico</th>
            <th>Dirección</th>
            <th>Código Postal</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($panaderos as $panadero)
        <tr>
        <td>{{$panadero->id_Panadero}}</td>

        <td>{{$panadero->Nombre}}</td>

        <td>{{$panadero->Apellido}}</td>

        <td>{{$panadero->Telefono}}</td>

        <td>{{$panadero->DNI}}</td>

        <td>{{$panadero->Movil}}</td>

        <td>{{$panadero->Correo}}</td>

        <td>{{$panadero->Direccion}}</td>

        <td>{{$panadero->CodPostal}}</td>
        <td>
        <a href="{{url('/panadero/'.$panadero->id_Panadero.'/edit')}}" class="btn btn-warning">
        Editar
        </a>
        | 

        <form action="{{url('/panadero/'.$panadero->id_Panadero)}}" class="d-inline" method="post">
        @csrf
        {{ method_field ('DELETE')}}
        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar de verdad de la buena?')" value="Borrar">

        </form>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$panaderos->links!!}
</div>
@endsection