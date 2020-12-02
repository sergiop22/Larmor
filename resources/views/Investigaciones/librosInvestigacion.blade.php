@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> 

<body style="background-image: url(/img/fondo1.jpg); background-size: cover;">
  <div class="container">
    <h1 class="page-header" style="font-family:courier">
        Libros
    </h1>

     <div class="container">
     	<div class="row justify-content-center">
    		
    	</div>
    </div>

  <table width="80%" cellspacing="5" cellpadding="5">
      <tr>
        <td><img src="/img/imagenes/atlas de anatomia humana tecnicas de imagen.jpg " WIDTH=158 HEIGHT=200 class="text-center" ></td>
        <td><img src="/img/imagenes/atlas de anatomia humana.jpg " WIDTH=158 HEIGHT=200 class="text-center" ></td>
        <td><img src="/img/imagenes/manual practico TC.jpg " WIDTH=158 HEIGHT=200 class="text-center" ></td>
      </tr>
      <tr>
        <td>
          <a href="{{ route('libro.descarga', 01) }}" >
            <i class="fa fa-download"></i> Descargar 
          </a>
        </td>
        <td>
          <a href="{{ route('libro.descarga', 02) }}" >
            <i class="fa fa-download"></i> Descargar 
          </a>
        </td>
        <td>
          <a href="{{ route('libro.descarga', 03) }}" >
            <i class="fa fa-download"></i>  Descargar 
          </a>
        </td>
      </tr>

      <tr>
        <td><img src="/img/imagenes/osteoarticular.png " WIDTH=158 HEIGHT=200 class="text-center" ></td>
        <td><img src="/img/imagenes/protocolos.jpg " WIDTH=158 HEIGHT=200 class="text-center" ></td>
        <td><img src="/img/imagenes/resonancia magnetica nuclear.jpg " WIDTH=158 HEIGHT=200 class="text-center" ></td>
      </tr>
      <tr>
        <td>
          <a href="{{ route('libro.descarga', 4) }}" >
            <i class="fa fa-download"></i> Descargar 
          </a>
        </td>
        <td>
          <a href="{{ route('libro.descarga', 5) }}" >
            <i class="fa fa-download"></i>  Descargar 
          </a>
        </td>
        <td>
          <a href="{{ route('libro.descarga', 6) }}" >
            <i class="fa fa-download"></i> Descargar 
          </a>
        </td>
      </tr>

      <tr>
        <td><img src="/img/imagenes/resonancia magnetica para tecnicos.jpg " WIDTH=158 HEIGHT=200 class="text-center" ></td>
        <td><img src="/img/imagenes/RM difusion.jpg " WIDTH=158 HEIGHT=200 class="text-center" ></td>
        <td><img src="/img/imagenes/tecnicas de imagen.jpg " WIDTH=158 HEIGHT=200 class="text-center" ></td>
      </tr>
      <tr>
        <td>
          <a href="{{ route('libro.descarga', 7) }}" >
            <i class="fa fa-download"></i> Descargar 
          </a>
        </td>
        <td>
          <a href="{{ route('libro.descarga', 8) }}" >
            <i class="fa fa-download"></i> Descargar 
          </a>
        </td>
        <td>
          <a href="{{ route('libro.descarga', 9) }}" >
            <i class="fa fa-download"></i> Descargar 
          </a>
        </td>
      </tr>

      <tr>
        <td><img src="/img/imagenes/tomografia computarizada.png " WIDTH=158 HEIGHT=200 class="text-center" ></td>
      </tr>

      <tr>
        <td>
          <a href="{{ route('libro.descarga', 10) }}" >
            <i class="fa fa-download"></i> Descargar 
          </a>
        </td>
      </tr>
    </table>

    <br>

    <div class="container">
  	<a class= "btn btn-xs btn-info" href="javascript:history.back(-1);">
  		<i class="fa fa-hand-o-left"></i> Regresar
  	</a> 
    </div>

  </div>
</body>
@endsection