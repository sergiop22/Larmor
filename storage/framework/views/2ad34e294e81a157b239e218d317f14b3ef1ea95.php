

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/> 

<body style="background-image: url(/img/fondo1.jpg); background-size: cover;">
  <div class="container">
    <div class="row justify-content-center">
      <h1 class="text-uppercase" style="font-family: Georgia; font-size: 28px;">
          Articulos e investigación
      </h1>

      <?php if(Auth::user()): ?>
        <?php if(Auth::user()->userAdmin=="1"): ?>
          <div class="container">
            <div class="row justify-content-center">
              <a class= "btn btn-xs btn-success" href="<?php echo e(route('investigacion.create')); ?>">
                <i class="fa fa-hand-pointer-o"></i> Agregar
              </a>
            </div>
          </div>
        <?php endif; ?>
      <?php endif; ?>

      <link rel="stylesheet" href="/css/investiga.css">

      <div class="container">
        <div class="row justify-content-center">
          <form class="form-inline-ml-3" action="/buscar">
            <input type="search" placeholder="Buscar" name="search" >
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </form>
        </div>
      </div>

      <table class="table table-striped">
        <thead>
          <tr>
            <th style="font-family:Georgia">Nombre</th>
            <th style="font-family:Georgia">Descripción</th>
            <th style="width: 80px; font-family:Georgia;"></th>
          </tr>
        </thead>
      <tbody>

        <?php $__empty_1 = true; $__currentLoopData = $investiga; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <tr>
              <td>
                <a href="<?php echo e(route('investigacion.show', $m->id)); ?>" style="font-size: 14px;">  <!-- investigaciones/<?php echo e($m->id); ?> -->
                  <?php echo e($m->titulo); ?>

                </a>
              </td>
              <td><?php echo e($m->descripcion); ?></td>
              <td>
                <?php if(Auth::user()): ?>
                  <?php if(Auth::user()->userAdmin=="1"): ?>
                    <a class= "btn btn-xs btn-info" href="<?php echo e(route('investigacion.edit', $m->id)); ?>">
                      <i class="fa fa-pencil-square-o"></i> Editar
                    </a>
                  <?php endif; ?>
                <?php endif; ?>
              </td>
              <td>
                <?php if(Auth::user()): ?>
                  <?php if(Auth::user()->userAdmin=="1"): ?>
                    <a class= "btn btn-xs btn-danger" href="<?php echo e(route('investigacion.destroy', $m->id)); ?>">
                      <i class="fa fa-trash"></i> Eliminar
                    </a>
                  <?php endif; ?>
                <?php endif; ?>
              </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
          <tr>
            <td colspan="5">
              -- No se han encontrado registros --
            </td>
          </tr>
        <?php endif; ?>

      </tbody>
      </table>
      <div class="row">
        <div class=".mx-row">
          <?php echo e($investiga->links()); ?>

        </div>
      </div>

      <div class="container">
        <a class= "btn btn-xs btn-info" href="javascript:history.back(-1);">
          <i class="fa fa-hand-o-left"></i> Regresar
        </a> 
        <a class= "btn btn-xs btn-danger pull-right" style="margin-left: 10px" href="<?php echo e(route('libros.listado')); ?>">
          <i class="fa fa-book"></i> Libros
        </a>
        <i></i>
        <a class= "btn btn-xs btn-danger pull-right" href="<?php echo e(route('imagenes.listado')); ?>">
          <i class="fa fa-file-image-o"></i> Imagenes
        </a> 
      </div>

    </div>
  </div>
</body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/Investigaciones/inicio.blade.php ENDPATH**/ ?>