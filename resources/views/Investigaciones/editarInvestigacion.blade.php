@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="page-header" style="font-family:courier">
      Agregar articulos
  </h1>

  @if(isset($investigacion))
    <form action="{{route('investigacion.update', $investigacion->id )}}" method="POST">
    <input type="hidden" name="_method" value="PATCH">
  @else
    <form method="post" action="{{ route('investigacion.store') }}">
  @endif
      {{csrf_field() }}
      <div class="form-group">
        <label>Titulo</label>
        <input class= "form-control" type="text" name="titulo" value="{{isset($investigacion) ? $investigacion->titulo : ''}}">
      </div>

      <div class="form-group">
        <label>Descripcion</label>
        <input class= "form-control" type="text" name="descripcion" value="{{isset($investigacion) ? $investigacion->descripcion : ''}}">
      </div>

      <div class="form-group">
        <label>Contenido</label>
        <textarea class= "form-control" name="contenido">{{ isset($investigacion) ? $investigacion->contenido : '' }}</textarea>
      </div>

      <div class="form-group">
        <label>Imagen</label>
        <input class= "form-control" type="text" name="imagen" value="{{isset($investigacion) ? $investigacion->imagen : ''}}">
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