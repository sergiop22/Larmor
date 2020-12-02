

<?php $__env->startSection('content'); ?>

<div class="container">
  <h1 class="page-header" style="font-family:courier">
      Agregar articulos
  </h1>

  <?php if(isset($investigacion)): ?>
    <form action="<?php echo e(route('investigacion.update', $investigacion->id )); ?>" method="POST">
    <input type="hidden" name="_method" value="PATCH">
  <?php else: ?>
    <form method="post" action="<?php echo e(route('investigacion.store')); ?>">
  <?php endif; ?>
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
        <label>Titulo</label>
        <input class= "form-control" type="text" name="titulo" value="<?php echo e(isset($investigacion) ? $investigacion->titulo : ''); ?>">
      </div>

      <div class="form-group">
        <label>Descripcion</label>
        <input class= "form-control" type="text" name="descripcion" value="<?php echo e(isset($investigacion) ? $investigacion->descripcion : ''); ?>">
      </div>

      <div class="form-group">
        <label>Contenido</label>
        <textarea class= "form-control" name="contenido"><?php echo e(isset($investigacion) ? $investigacion->contenido : ''); ?></textarea>
      </div>

      <div class="form-group">
        <label>Imagen</label>
        <input class= "form-control" type="text" name="imagen" value="<?php echo e(isset($investigacion) ? $investigacion->imagen : ''); ?>">
      </div>

      <div class="form-group">
        <label>Habilitado</label>
        <select class="form-control" name="habilitado">
          <option value="1">Si</option>
          <option value="0">No</option>
        </select>
      </div>

      <button type="submit" class="btn btn-primary btn-lg btn-block">
        Guardar
      </button>
    </form>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/Investigaciones/editarInvestigacion.blade.php ENDPATH**/ ?>