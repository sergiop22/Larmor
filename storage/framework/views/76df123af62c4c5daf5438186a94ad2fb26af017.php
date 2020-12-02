!doctype html>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <link href="/css/menuPracticas.css" rel="stylesheet">

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" >
  <div class="container">
    <img src="/img/logologo.png" width="65" height="50"  >
  </div>
</nav>

<section class="hero-section">
    <div class="card-grid">
      <a class="card" href="<?php echo e(route('caso.index')); ?>">
        <div class="card__background" style="background-image: url(/img/imagenes/68.JPG)"></div>
        <div class="card__content">
          <p class="card__category">Caso real</p>
          <h2 class="card__heading">Practica con un caso real de RM</h2>
        </div>
      </a>
      <a class="card" href="<?php echo e(route('secuencia.index')); ?>">
        <div class="card__background" style="background-image: url(/img/imagenes/69.PNG)"></div>
        <div class="card__content">
          <p class="card__category">Planificación</p>
          <h2 class="card__heading">Practica tu conocimiento en la planificación del estudio</h2>
        </div>
      </a>
      <a class="card" href="<?php echo e(route('secuencia.create')); ?>">
        <div class="card__background" style="background-image: url(/img/imagenes/71.JPG)"></div>
        <div class="card__content">
          <p class="card__category">Predicción de imagen</p>
          <h2 class="card__heading">Sube tu imagen de resonancia y conoce la secuencia más importante </h2>
        </div>
      </a>
      <a class="card" href="<?php echo e(route('investigacion.index')); ?>">
        <div class="card__background" style="background-image: url(/img/reso2.jpg)"></div>
        <div class="card__content">
          <p class="card__category">Investigación</p>
          <h2 class="card__heading">Articulos, libros e imagenes para tu conocimiento</h2>
        </div>
      </a>
    </div>
</section>
<?php /**PATH C:\laragon\www\Proyecto\resources\views/Practicas/practicas.blade.php ENDPATH**/ ?>