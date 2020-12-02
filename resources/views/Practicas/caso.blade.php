!doctype html>

<head>
  <link href="/css/tarjeta.css" rel="stylesheet">
  <link href="/css/boton_dark.css" rel="stylesheet">
</head>

<body>
@foreach ($paciente as $paciente)
<div>
  @forelse ($caso as $caso)
  <div class="container"> 
    <div class="front side">
      <div class="content">
        <h1>Caso real</h1>
        <p>Diagnostico: {{ $caso->dx }}</p> 
        <p>Protocolo: {{ $caso->protocolo }}</p>
      </div>
    </div>
    <div class="back side">
      <div class="content">
        <h1>Datos del paciente</h1>
          <form>
            <label>Nombre del paciente :</label>
            <h4> {{ $paciente->nombre }} </h4>
            <label>Fecha de nacimiento del paciente m/d/Y :</label>
            <h4> {{ $paciente->fecha_nac }}  </h4>
            <label>Secuencias sugeridas :</label>
            <h4> {{ $caso->secuencia }} </h4>
            <label>Información y otras alternativas sugeridas :</label>
            <h4> {{ $caso->extra }} </h4> 
          </form>
      </div>
         <a class="btn btn-dark " 
          style="font-family:Montserrat" 
          href="javascript:history.back(-1);">Cancelar</a>
          <a class="btn btn-dark " 
          style="font-family:Montserrat" 
          href="{{ route('caso.respuesta', ['caso' => $caso->id]) }}">Continuar</a>
    </div>
    @empty
    <div class="content">
      <p> -- No hay nada --</p> 
    </div>
  </div>
  @endforelse
</div>
</body>
@endforeach
