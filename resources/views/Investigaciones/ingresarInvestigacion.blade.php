@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="page-header" style="font-family:courier">
      Agregar articulos
  </h1>

  <form method="post" action="{{ route('investigacion.store') }}"> 
    <input type="hidden" name="id" value="0" />
    
    {{csrf_field() }}
    <div class="form-group">
      <label>Titulo</label>
      <input class= "form-control" type="text" name="titulo">
    </div>

    <div class="form-group">
      <label>Descripcion</label>
      <textarea class= "form-control" name="descripcion"></textarea>
    </div>

    <div class="form-group">
      <label>Contenido</label>
      <textarea class= "form-control" name="contenido"></textarea>
    </div>

    <div class="form-group">
      <label>Imagen</label>
      <input class= "form-control" type="text" name="imagen" value="null">
    </div>

    <div class="form-group">
      <label>Habilitado</label>
      <select class="form-control" name="habilitado">
        <option value="1">Si</option>
        <option value="0">No</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary btn-lg btn-block">
      Guardar
    </button>
  </form>

</div>
@endsection