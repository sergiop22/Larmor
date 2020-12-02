!doctype html>

<head>
  <link href="/css/tarjeta.css" rel="stylesheet">
  <link href="/css/boton_dark.css" rel="stylesheet">
</head>

<body>
<?php $__currentLoopData = $paciente; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div>
  <?php $__empty_1 = true; $__currentLoopData = $caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
  <div class="container"> 
    <div class="front side">
      <div class="content">
        <h1>Caso real</h1>
        <p>Diagnostico: <?php echo e($caso->dx); ?></p> 
        <p>Protocolo: <?php echo e($caso->protocolo); ?></p>
      </div>
    </div>
    <div class="back side">
      <div class="content">
        <h1>Datos del paciente</h1>
          <form>
            <label>Nombre del paciente :</label>
            <h4> <?php echo e($paciente->nombre); ?> </h4>
            <label>Fecha de nacimiento del paciente m/d/Y :</label>
            <h4> <?php echo e($paciente->fecha_nac); ?>  </h4>
            <label>Secuencias sugeridas :</label>
            <h4> <?php echo e($caso->secuencia); ?> </h4>
            <label>Información y otras alternativas sugeridas :</label>
            <h4> <?php echo e($caso->extra); ?> </h4> 
          </form>
      </div>
         <a class="btn btn-dark " 
          style="font-family:Montserrat" 
          href="javascript:history.back(-1);">Cancelar</a>
          <a class="btn btn-dark " 
          style="font-family:Montserrat" 
          href="<?php echo e(route('caso.respuesta', ['caso' => $caso->id])); ?>">Continuar</a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="content">
      <p> -- No hay nada --</p> 
    </div>
  </div>
  <?php endif; ?>
</div>
</body>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH C:\laragon\www\Proyecto\resources\views/Practicas/caso.blade.php ENDPATH**/ ?>