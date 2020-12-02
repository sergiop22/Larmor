@extends('layouts.app')

@section('content')

<body style="background-image: url(/img/degradado3.png); background-size: cover;">
  <div class="container">
    <h1 class="page-header" style="font-family:courier">
        {{ $investigacion->titulo}}
    </h1>

    @if(Auth::user())
       @if(Auth::user()->userAdmin=="1")
        	<div class="container">
            <div class="row justify-content-center">
              <form enctype="multipart/form-data" class="text-center" action="/imagen" style="color: #000000; margin-left: 105px;" method="POST">
                  <label>Actualizar imagen</label>
  	              <input type="file" name="imagen" >
  	              <input type="hidden" name="id" value="{{ $investigacion->id }}">
  	              <input type="hidden" name="_token" value="{{ csrf_token() }}">
  	              <br>
  	              <input type="submit" value="Subir" class="pull-left btn btn-sm btn-primary" style="margin-left: -100px;">
              </form>
            </div>
          </div>
       @endif
     @endif


     <div class="container">
     	<div class="row justify-content-center">
    		<img src="/img/articulos/{{ $investigacion->imagen }}" class="text-center" >
    	</div>
    </div>

    <div class="container">
    		{{ $investigacion->contenido }}
    </div>

    <br>

    <div class="container">
  	<a class= "btn btn-xs btn-info" href="javascript:history.back(-1);">
  		<i class="fa fa-hand-o-left"></i> Regresar
  	</a> 
    </div>

  </div>
</body>
@endsection