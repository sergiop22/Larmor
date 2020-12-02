@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> 

<body style="background-image: url(/img/fondo1.jpg); background-size: cover;">
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="text-uppercase" style="font-family: Georgia; font-size: 28px;">
          Articulos e investigación
      </h1>

      @if(Auth::user())
        @if(Auth::user()->userAdmin=="1")
          <div class="container">
            <div class="row justify-content-center">
              <a class= "btn btn-xs btn-success" href="{{ route('investigacion.create') }}">
                <i class="fa fa-hand-pointer-o"></i> Agregar
              </a>
            </div>
          </div>
        @endif
      @endif

      <link rel="stylesheet" href="/css/investiga.css">

      <div class="container">
        <div class="row justify-content-center">
          <form class="form-inline-ml-3" action="/buscar">
            <input type="search" placeholder="Buscar" name="search" >
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th style="font-family:Georgia">Nombre</th>
            <th style="font-family:Georgia">Descripción</th>
            <th style="width: 80px; font-family:Georgia;"></th>
          </tr>
        </thead>
      <tbody>

        @forelse ($investiga as $m)
            <tr>
              <td>
                <a href="{{ route('investigacion.show', $m->id) }}" style="font-size: 14px;">  <!-- investigaciones/{{ $m->id }} -->
                  {{ $m->titulo }}
                </a>
              </td>
              <td>{{ $m->descripcion }}</td>
              <td>
                @if(Auth::user())
                  @if(Auth::user()->userAdmin=="1")
                    <a class= "btn btn-xs btn-info" href="{{ route('investigacion.edit', $m->id) }}">
                      <i class="fa fa-pencil-square-o"></i> Editar
                    </a>
                  @endif
                @endif
              </td>
              <td>
                @if(Auth::user())
                  @if(Auth::user()->userAdmin=="1")
                    <a class= "btn btn-xs btn-danger" href="{{ route('investigacion.destroy', $m->id) }}">
                      <i class="fa fa-trash"></i> Eliminar
                    </a>
                  @endif
                @endif
              </td>
            </tr>
        @empty
          <tr>
            <td colspan="5">
              -- No se han encontrado registros --
            </td>
          </tr>
        @endforelse

      </tbody>
      </table>
      <div class="row">
        <div class=".mx-row">
          {{ $investiga->links() }}
        </div>
      </div>

      <div class="container">
        <a class= "btn btn-xs btn-info" href="javascript:history.back(-1);">
          <i class="fa fa-hand-o-left"></i> Regresar
        </a> 
        <a class= "btn btn-xs btn-danger pull-right" style="margin-left: 10px" href="{{ route('libros.listado') }}">
          <i class="fa fa-book"></i> Libros
        </a>
        <i></i>
        <a class= "btn btn-xs btn-danger pull-right" href="{{ route('imagenes.listado') }}">
          <i class="fa fa-file-image-o"></i> Imagenes
        </a> 
      </div>

    </div>
  </div>
</body>
@endsection