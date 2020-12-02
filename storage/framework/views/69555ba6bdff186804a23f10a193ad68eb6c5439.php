!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Larmor</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/creative.css" rel="stylesheet"> 

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-dark"  style="font-family: candara;" href="#page-top">Larmor</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                  <?php if(auth()->guard()->guest()): ?>
                      <li class="nav-item" >
                          <a class="nav-link text-dark" style="color: #0a0a0a;" href="<?php echo e(route('login')); ?>"><?php echo e(__('Ingresar')); ?></a>
                      </li>
                      <li class="nav-item" >
                          <a class="nav-link text-dark" style="color: #0a0a0a;" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrarse')); ?></a>
                      </li>
                  <?php else: ?>
                      <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #0a0a0a; font-family: candara; font-size: 17px;" v-pre>
                              <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                          </a>

                         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="<?php echo e(url('/usuario')); ?>">
                                  <?php echo e(__('Mi cuenta')); ?>

                              </a> 
                              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  <?php echo e(__('Cerrar sesión')); ?>

                              </a>

                              <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                  <?php echo csrf_field(); ?>
                              </form>
                          </div>
                      </li>  
                  <?php endif; ?>
              </ul>
            </li>
              <li class="nav-item"></li>
          </ul>
        </div>
      </div>
    </nav>
                        
    <header class="masthead text-center text-dark d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <img src="/img/logo2.png" width="200" height="200" >
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-dark mb-5">¡Todo sobre Resonancia magnetica!</p>
            <a class="btn btn-info btn-xl js-scroll-trigger text-dark" style="font-family: candara; font-size: 17px;" href="<?php echo e(url('/practicas')); ?>">Practica tu conocimiento</a>
          </div>
        </div>
      </div>
    </header>
    <?php echo $__env->yieldContent('contenido'); ?>

    <section id="inicio">
      <div class="container">
        <div class="row mx-md-n4">
          <div class="col-md-3 ml-md-auto" ><img src="/img/inv.svg" align="middle" alt="" width="90" height="90" title="Investigacion"></div>
          <div class="col-md-3 ml-md-auto"><img src="/img/forum.svg" align="middle" alt="" width="90" height="90" title="Foro"></div>
          <div class="col-md-3 ml-md-auto"><img src="/img/resonancia3.svg" align="middle" alt="" width="90" height="90" title="Secuencias"></div>
          <p class="row mx-md-n1"></p>
          <p class="row mx-md-n1"></p>
        </div>

        <p class="d-flex justify-content-around" ></p> 
        <div class="row mx-md-n4">
          <div class="col-md-4 px-md-5">
            <a  class="btn btn-info btn-block btn-xl text-dark " 
                style="font-family: candara; font-size: 17px;" 
                href="<?php echo e(route('investigacion.index')); ?>">Investigación</a>
          </div>
          <div class="col-md-4 px-md-5">
            <a  class="btn btn-info btn-block btn-xl text-dark "
                style="font-family: candara; font-size: 17px;" 
                href="<?php echo e(url('/foro')); ?>" >Foro de discusión</a>
          </div>
          <div class="col-md-4 px-md-5">
            <a class="btn btn-info btn-block btn-xl text-dark " 
               style="font-family: candara; font-size: 17px;"
               href="<?php echo e(route('secuencia.index')); ?>">Planeación</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contáctanos</h2>
            <hr class="my-4">
            <p class="mb-5">¿Tienes problemas con el sitio? ¿Dudas? ¿Sugerencias? envianos un correo electrónico compartiendo tu experiencia con Larmor</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:Larmor_l@gmail.com">Larmor_l@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="/vendor/jquery/jquery.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    <!-- Plugin JavaScript -->
    <script src="/vendor/jquery-easing/jquery.easing.js"></script>
    <script src="/vendor/scrollreveal/scrollreveal.js"></script>
    <script src="/vendor/magnific-popup/jquery.magnific-popup.js"></script>

    <!-- Custom scripts for this template -->
    <script src="/js/creative.js"></script>

    <script src="/js/alerta1.js"></script>

  </body>

</html>
 <?php /**PATH C:\laragon\www\Proyecto\resources\views/layouts/mi-tema.blade.php ENDPATH**/ ?>