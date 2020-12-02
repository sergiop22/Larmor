!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mi encuesta</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="/vendor/fontawesome-free/css/all.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="/css/creative.min.css" rel="stylesheet"> 

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger text-dark" href="<?php echo e(url('/')); ?>">Inicio</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo e(route('login')); ?>"><?php echo e(__('Ingresar')); ?></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="<?php echo e(route('register')); ?>"><?php echo e(__('Registrarse')); ?></a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #0a0a0a" v-pre>
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
            <li class="nav-item">
  <!--        -->
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="bg-primary" id="show" style= "background-image: url(../img/space.jpg);">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading text-white">Mi encuesta</h2>
                <p class="text-faded mb-4"></p>
                <br>
                <table class='table text-white'>
                  <form action="<?php echo e(url('/encuestas')); ?>" method="POST">
                      <label class="text-white" for="Nombre">Nombre:</label>
                      <input type="text" name="nombre">
                      <br>
                      <label class="text-white" for="Descripcion">Descripción:</label>
                      <input type="text" name="descripcion">
                      <br>
                      <p class="text-faded mb-4"></p>
                      <p class="text-white">Copia el link de tu encuesta y pegala aquí</p>
                      <br>                      
                      <input type="text" id="link" name="link">
                      <input type="submit" value="Submit" name="Guardar">
                  </form>
                </table>
                <br>
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

  </body>

</html><?php /**PATH C:\laragon\www\Proyecto\resources\views/Encuestas/miEncuesta.blade.php ENDPATH**/ ?>