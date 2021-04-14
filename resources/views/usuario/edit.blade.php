@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Editar usuario</h1>
@stop

@section('content')
    
<form action="/usuarios/{{$usuario->id}}" method="POST">
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">id</label>
    <input id="id" name="id" type="text" class="form-control" value="{{$usuario->id}}" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Nombre</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$usuario->name}}" tabindex="2">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">correo</label>
    <input id="email" name="email" type="text" class="form-control" value="{{$usuario->email}}" tabindex="3">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">password</label>
    <input id="password" class="form-control" type="password" name="password" required pattern="{1,20}" value="{{$usuario->password}}" tabindex="4" /> 
  </div>

  
  <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')  
@stop