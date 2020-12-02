!doctype html>

<link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/css/creative.css" rel="stylesheet"> 

<section class="bg-primary" id="show" style= "background-image: url(/img/resonador.jpg); background-size: cover; ">
	<div class="container">
		<div class="mx-auto" style="width: 350px;">
			<div class="card" style="width: 23rem; margin-top: -40px">
			  <img src="/img/resonancias/<?php echo e($imagen); ?>" class="card-img-top" alt="...">
			  <div class="card-body">
	              <label style="margin-right: 90px; font-size:120%"> Resonancia </label>
	              <a href="javascript:history.back(-1);" class="btn btn-info">Volver</a>
	          </div>
			</div>
		</div>
    </div>

    <br>

    <div class="container">
		<div class="jumbotron">
		  <h1 class="display-4">La secuencia de tu Resonancia es ADC!</h1>
		  <p class="lead">Las imágenes de ADC son complementarias de la secuencia de difusión y corresponden a valores numéricos de ese coeficiente demostrando cuanta restricción existe en los tejidos a la difusión del agua</p>
		  <hr class="my-4">
		  <p class="lead">Cuanta menos difusión exista, cuanta mas restricción se encuentre los ADC se verán mas hipointensos</p>
		  <hr class="my-4">
		  <p class="lead">En los mapas ADC las regiones con difusión son relativamente hiperintensas, mientras que las imágenes con restricción son hipointensas</p>
		  <hr class="my-4">
		  <p>-Es un fenómeno físico molecular<br>
			 -Semide en mm2 / segundo<br>
			 -Hace referencia al movimiento aleatorio de traslación molecular debido a la energía térmica<br>
			 -Este movimiento se encuentra restringido por  obstáculos histológicos<br>
			 -se utiliza un nuevo parámetro denominado coeficiente de difusión aparente, que tiene en cuenta la restricción a la difusión<br>
			 -Esta difusión biológica  puede ser Isotrópica o Anisotrópica</p>
		</div>
    </div>

    <div class="container">
		<div class="jumbotron">
		  <h1 class="display-4">Cálculo del mapa ADC</h1>
		  <p class="lead">El cálculo del mapa ADC se basa en el logaritmo negativo del radio de dos sets de imágenes adquiridas, relacionando aquellas obtenidas sin la aplicación de un gradiente de difusión (b=0 s/mm2) con las adquiridas luego del empleo del gradiente de difusión (por ejemplo, b=50, 500 o 1000 s/mm2), siendo necesario para poder realizar el mapa ADC la adquisición de al menos dos valores b.</p>
		  <hr class="my-4">
		  <div align="center">
		  	<img src="/img/resonancias/adc1.png" >
		    <img src="/img/resonancias/adc2.png">
		    <img src="/img/resonancias/adc3.png">
		  </div>
		  <hr class="my-4">
		  <div align="center">
		    <img src="/img/resonancias/adc4.png">
		  </div>
		  <p class="lead">El proceso del cálculo del mapa ADC es automático y se realiza en la etapa de posprocesamiento de la información y suele ser presentado como una imagen paramétrica en escala de grises (valoración visual del mapa ADC) que refleja las diferencias de difusión de las moléculas de agua en un sector determinado.</p>
		  <hr class="my-4">
		  <p>El computador calcula el ADC para cada pixel de la imagen y lo muestra como un mapa paramétrico, en color o escala de grises. 
		  Manualmente, es posible dibujar un área de interés (ROI) sobre la imagen y así obtener el valor de ADC para un determinado tejido</p>
		  <hr class="my-4">
		  <p>-El ADC nos da un valor directamente proporcional al valor de difusión<br>
			-Cuando la difusión es negativa la imagen será mas negra y las zonas de restricción en la difusión serán hipointensas<br>
			-En la difusión podremos detectar zonas de probable restricción hasta tener el valor de ADC<br>
			-El ADC confirma que esta restricción que tenemos mediante la secuencia de difusión es real.</p>
		</div>
    </div>
</section>

<?php /**PATH C:\laragon\www\Proyecto\resources\views/Resonancias/ADC.blade.php ENDPATH**/ ?>