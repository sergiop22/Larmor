!doctype html>

<head>
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>  
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
  <link rel="stylesheet" href="/css/respuestas.css?v=<?php echo time(); ?>" />
  <script src="/js/respuestas.js?v=<?php echo time(); ?>" type="module"></script>
</head>

<script>
  var msg = '{{Session::get('alert')}}';
  var exist = '{{Session::has('alert')}}';
  if(exist){
    alert(msg);
  }
</script>

<!-- multistep form -->
@foreach ($secuencias as $secuencia)
<form id="msform" action="/validacion" method="POST">
  @csrf
  <!-- progressbar -->
  <ul id="progressbar">
    <li class="active">Secuencias</li>
    <li>Te / Tr / Ti</li>
    <li>Detalles extra</li> 
  </ul>
  <!-- fieldsets -->
  <fieldset>
    <h2 class="fs-title">{{ $caso->dx }}</h2>
    <h3 class="fs-subtitle">Protocolo: {{ $caso->protocolo }}</h3>
    <h3 class="fs-title2">Secuencia: {{ $secuencia->nombre }}</h3>
    <input type="text" name="plano" placeholder="Plano" />
    <input type="text" name="tipo_secuencia" placeholder="Tipo de Secuencia" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">{{ $caso->dx }}</h2>
    <h3 class="fs-subtitle">Protocolo: {{ $caso->protocolo }}</h3>
    <h3 class="fs-title2">Secuencia: {{ $secuencia->nombre }}</h3>
    <h3 class="fs-subtitle">Te </h3>
    <select class="select" name="te" id="te">
      <option value="1,2">1,2</option>
      <option value="1,5">1,5</option>
      <option value="1,45">1,45</option>
      <option value="1,85">1,85</option>
      <option value="2,5">2,5</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="6">6</option>
      <option value="6,58">6,58</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="13,3">13,3</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="25">25</option>
      <option value="<25"><25</option>
      <option value="27">27</option>
      <option value="30">30</option>
      <option value="35">35</option>
      <option value="38">38</option>
      <option value="42">42</option>
      <option value="45">45</option>
      <option value="47">47</option>
      <option value="50">50</option>
      <option value="54">54</option>
      <option value="59">59</option>
      <option value="60">60</option>
      <option value="61">61</option>
      <option value="62,5">62,5</option>
      <option value="69">69</option>
      <option value="80">80</option>
      <option value="84">84</option>
      <option value="85">85</option>
      <option value="86">86</option>
      <option value="95">95</option>
      <option value="100">100</option>
      <option value="102">102</option>
      <option value="105">105</option>
      <option value="106">106</option>
      <option value="130">130</option>
      <option value="150">150</option>
      <option value="625">625</option>
      <option value="750">750</option>
      <option value="800">800</option>
      <option value="2384">2384</option>
      <option value="2-25">2-25</option>
      <option value="14-20">14-20</option>
      <option value="80-120">80-120</option>
      <option value="TE1:2,5 TE2:5">TE1:2,5 TE2:5</option>
      <option value="TE1:2,35 TE2:5">TE1:2,35 TE2:5</option>
      <option value="Auto">Auto</option>
      <option value="Min">Min</option>
      <option value="">Ninguno, No es necesario</option>
    </select>
    <h3 class="fs-subtitle">Tr </h3>
    <select class="select" name="tr" id="tr">
      <option value="1">1</option>
      <option value="1,2">1,2</option>
      <option value="1,6">1,6</option>
      <option value="1,000">1,000</option>
      <option value="2,800-4,000">2,800-4,000</option> 
      <option value="3">3</option>
      <option value="3,2">3,2</option>
      <option value="3,5">3,5</option>
      <option value="3,7">3,7</option>
      <option value="3,05">3,05</option>
      <option value="3,08">3,08</option>
      <option value="3,83">3,83</option>
      <option value="3,15">3,15</option>
      <option value="3,65">3,65</option>
      <option value="3,69">3,69</option>
      <option value="3,100">3,100</option>
      <option value="3,140">3,140</option>
      <option value="3,180">3,180</option>
      <option value="3,250">3,250</option>
      <option value="3,360">3,360</option>
      <option value="3,400">3,400</option>
      <option value="3,460">3,460</option>
      <option value="3,500">3,500</option>
      <option value="3,600">3,600</option>
      <option value="4">4</option>
      <option value="4,2">4,2</option>
      <option value="4,5">4,5</option>
      <option value="4,6">4,6</option>
      <option value="4,8">4,8</option>
      <option value="4,000">4,000</option>     
      <option value="4,200">4,200</option>
      <option value="4,925">4,925</option>
      <option value="5">5</option>
      <option value="5,000">5,000</option>
      <option value="5,125">5,125</option>
      <option value="5,180">5,180</option>
      <option value="5,260">5,260</option>
      <option value="5,550">5,550</option>
      <option value="6">6</option>
      <option value="6,300">6,300</option>
      <option value="7">7</option>
      <option value="8,35">8,35</option>
      <option value="16,4">16,4</option>
      <option value="20">20</option> 
      <option value="33">33</option>
      <option value="70">70</option> 
      <option value="75">75</option>
      <option value="100">100</option> 
      <option value="120">120</option>
      <option value="400">400</option>
      <option value="420">420</option>
      <option value="470">470</option>
      <option value="480">480</option>
      <option value="500">500</option>
      <option value="509">509</option>
      <option value="515">515</option>
      <option value="525">525</option>
      <option value="540">540</option>
      <option value="598">598</option>
      <option value="600">600</option>  
      <option value="620">620</option>
      <option value="625">625</option>
      <option value="640">640</option>
      <option value="650">650</option>
      <option value="664">664</option>
      <option value="680">680</option> 
      <option value="720">720</option> 
      <option value="725">725</option>
      <option value="740">740</option>  
      <option value="760">760</option>
      <option value="800">800</option>
      <option value="850">850</option> 
      <option value="900">900</option>
      <option value="945">945</option>
      <option value="950">950</option>
      <option value="3000">3000</option>  
      <option value="6000">6000</option> 
      <option value="7500">7500</option>
      <option value="8000">8000</option>
      <option value="450-650">450-650</option>
      <option value="2800-4000">2800-4000</option>
      <option value="8000-12000">8000-12000</option>
      <option value="Auto">Auto</option>
      <option value="Min">Min</option>
      <option value="">Ninguno, No es necesario</option>
    </select>
    <h3 class="fs-subtitle">Ti </h3>
    <select class="select" name="ti" id="ti">
      <option value="60">60</option>
      <option value="750">750</option>
      <option value="140">140</option>
      <option value="145">145</option>
      <option value="150">150</option>
      <option value="750">750</option>
      <option value="2500">2500</option>
      <option value="">Ninguno, No es necesario</option>
    </select>
    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <input type="button" name="next" class="next action-button" value="Siguiente" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">{{ $caso->dx }}</h2>
    <h3 class="fs-subtitle">Protocolo: {{ $caso->protocolo }}</h3>
    <h3 class="fs-title2">Secuencia: {{ $secuencia->nombre }}</h3>
    <h3 class="fs-subtitle">Grosor de corte: {{ $secuencia->grosor_corte }} </h3>
    <h3 class="fs-subtitle">Campo de visión: {{ $secuencia->campo_vision }} </h3>
    <h3 class="fs-subtitle">Matriz: {{ $secuencia->matriz }}</h3>
    <h3 class="fs-subtitle">Adquisiciones: {{ $secuencia->adquisiciones }} </h3>
    <h3 class="fs-subtitle">Dirección de Fase: {{ $secuencia->direccion_fase }}</h3>
    <h3 class="fs-subtitle">---------------------------------------------------</h3>
    <input type="button" name="previous" class="previous action-button" value="Anterior" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <input name="id_final" value="{{ $secuencia->id }} "/>
    <input type="submit" name="submit" class="submit action-button" value="Finalizar"/>
  </fieldset>
  
</form>
@endforeach

