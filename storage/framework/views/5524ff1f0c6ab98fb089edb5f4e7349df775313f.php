!doctype html>

<head>
	<link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/css/card.css" rel="stylesheet">    
</head>

<body>
<div class="container">
  <div class="row text-center">
  	<?php $__currentLoopData = $protocolo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $protocolo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
    <div class="col-md-6 card-container">
      <div class="card card-flip text-center">
        <div class="front text-center" style="padding-top: 100px;"> 
          <h4 class="card-title" style="font-size: 250%;"><?php echo e($protocolo->nombre); ?></h4>
          <h6 class="card-subtitle text-muted" style="font-size: 150%;"><?php echo e($protocolo->secuencia); ?></h6>
        </div>
        <div class="back card-block">
          <img src="/img/cortes/<?php echo e($protocolo->imagen); ?>" class="card-img-top" style="width: 540px;"><!-- o 360px -->
          <p><?php echo e($protocolo->programacion); ?></p>
        </div>
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  </div>
  <br>
  <a href="javascript:history.back(-1);" class="pull-left btn btn-sm btn-primary" style="padding: 12px 30px; font-size: 100%">Atras</a>
</div>


<script src="/js/card.js"></script>

</body>

 <?php /**PATH C:\laragon\www\Proyecto\resources\views/Protocolos/protocolos.blade.php ENDPATH**/ ?>