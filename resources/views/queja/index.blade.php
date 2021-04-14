@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    
@stop

@section('content')
   <a href="quejas/create" class="btn btn-primary mb-3">CREAR NUEVA QUEJA</a>
   <h1>Listado de Quejas</h1>
<table id="quejas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre del cliente</th>
            <th scope="col">Correo del cliente</th>
            <th scope="col">Correo del administrador</th>
            <th scope="col">Descripcion </th>
            <th scope="col">Tipo de servicio</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($quejas as $queja)
        <tr>
            <td>{{ $queja->id}}</td>
            <td>{{$queja->nombre_cliente}}</td>
            <td>{{$queja->email_cliente}}</td>
            <td>{{$queja->email_admin}}</td>
            <td>{{$queja->descripcion}}</td>
            <td>{{$queja->tipo_servicio}}</td>
            <td>
                <form action="{{ route ('quejas.destroy',$queja->id)}}" method="POST">
                <a href="/quejas/{{ $queja->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap5.min.js"></script>

<!--<script>
$(document).ready(function() {
    $('#articulos').DataTable({
        "lengthMenu": [[5,10, 50, -1], [5, 10, 50, "All"]]
    });
} );
</script>-->

@stop