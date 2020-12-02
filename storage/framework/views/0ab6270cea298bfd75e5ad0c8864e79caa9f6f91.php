!doctype html>

<link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/css/creative.css" rel="stylesheet"> 

<section class="bg-primary" id="show" style= "background-image: url(/img/resonador.jpg); background-size: cover; ">
	<div class="container">
		<div class="mx-auto" style="width: 350px;">
			<div class="card" style="width: 23rem; margin-top: -40px">
			  <img src="/img/resonancias/default.jpg" class="card-img-top" alt="...">
			  <div class="card-body">
			    <form enctype="multipart/form-data" class="text-center" action="/resonancia" style="margin-left: 80px;" method="POST">
	              <label style="margin-right: 90px; font-size:120%"> Subir resonancia </label>
	              <input type="file" name="resonancia" >
	              <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	              <br>
	              <input type="submit" value="Subir" class="pull-left btn btn-sm btn-primary" style="margin-left: -100px; margin-top: 10px">
	            </form>
			  </div>
			</div>
			<br>
			<a href="javascript:history.back(-1);" class="pull-left btn btn-sm btn-primary">Atras</a>
		</div>
    </div>
</section>

<?php /**PATH C:\laragon\www\Proyecto\resources\views/Resonancias/resonancia.blade.php ENDPATH**/ ?>