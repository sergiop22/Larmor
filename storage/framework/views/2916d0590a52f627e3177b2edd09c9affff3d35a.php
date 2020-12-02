

<?php $__env->startSection('content'); ?>

<body style="background-image: url(/img/degradado3.png); background-size: cover;">
  <div class="container">
    <h1 class="page-header" style="font-family:courier">
        <?php echo e($investigacion->titulo); ?>

    </h1>

    <?php if(Auth::user()): ?>
       <?php if(Auth::user()->userAdmin=="1"): ?>
        	<div class="container">
            <div class="row justify-content-center">
              <form enctype="multipart/form-data" class="text-center" action="/imagen" style="color: #000000; margin-left: 105px;" method="POST">
                  <label>Actualizar imagen</label>
  	              <input type="file" name="imagen" >
  	              <input type="hidden" name="id" value="<?php echo e($investigacion->id); ?>">
  	              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
  	              <br>
  	              <input type="submit" value="Subir" class="pull-left btn btn-sm btn-primary" style="margin-left: -100px;">
              </form>
            </div>
          </div>
       <?php endif; ?>
     <?php endif; ?>


     <div class="container">
     	<div class="row justify-content-center">
    		<img src="/img/articulos/<?php echo e($investigacion->imagen); ?>" class="text-center" >
    	</div>
    </div>

    <div class="container">
    		<?php echo e($investigacion->contenido); ?>

    </div>

    <br>

    <div class="container">
  	<a class= "btn btn-xs btn-info" href="javascript:history.back(-1);">
  		<i class="fa fa-hand-o-left"></i> Regresar
  	</a> 
    </div>

  </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/investigaciones/mostrarInvestigacion.blade.php ENDPATH**/ ?>