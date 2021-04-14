@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Crear queja</h1>
@stop

@section('content')
    
<form action="/quejas" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Nombre del cliente</label>
    <input id="nombre_cliente" name="nombre_cliente" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">correo del cliente</label>
    <input id="email_cliente" name="email_cliente" type="text" class="form-control" tabindex="2">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">correo del admin</label>
    <input id="email_admin" name="email_admin" type="text" class="form-control" tabindex="3">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="4">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Tipo de servicio</label>
    <input id="tipo_servicio" name="tipo_servicio" type="text" class="form-control" tabindex="5">
  </div>
  <a href="/quejas" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop