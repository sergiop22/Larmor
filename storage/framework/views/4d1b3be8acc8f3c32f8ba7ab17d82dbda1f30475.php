<?php $__env->startSection(Config::get('chatter.yields.head')); ?>
	<link href="/vendor/devdojo/chatter/assets/css/chatter.css" rel="stylesheet">
	<link href="/vendor/devdojo/chatter/assets/css/simplemde.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<div id="chatter" class="discussion">

	<div id="chatter_header" style="background-color:<?php echo e($discussion->color); ?>">
		<div class="container">
			<a class="back_btn" href="/<?php echo e(Config::get('chatter.routes.home')); ?>"><i class="chatter-back"></i></a>
			<h1><?php echo e($discussion->title); ?></h1><span class="chatter_head_details">Creado en <?php echo e(Config::get('chatter.titles.category')); ?><a class="chatter_cat" href="/<?php echo e(Config::get('chatter.routes.home')); ?>/<?php echo e(Config::get('chatter.routes.category')); ?>/<?php echo e($discussion->category->slug); ?>" style="background-color:<?php echo e($discussion->category->color); ?>"><?php echo e($discussion->category->name); ?></a></span>
		</div>
	</div>

	<?php if(Session::has('chatter_alert')): ?>
		<div class="chatter-alert alert alert-<?php echo e(Session::get('chatter_alert_type')); ?>">
			<div class="container">
	        	<strong><i class="chatter-alert-<?php echo e(Session::get('chatter_alert_type')); ?>"></i> <?php echo e(Config::get('chatter.alert_messages.' . Session::get('chatter_alert_type'))); ?></strong>
	        	<?php echo e(Session::get('chatter_alert')); ?>

	        	<i class="chatter-close"></i>
	        </div>
	    </div>
	    <div class="chatter-alert-spacer"></div>
	<?php endif; ?>

	<?php if(count($errors) > 0): ?>
	    <div class="chatter-alert alert alert-danger">
	    	<div class="container">
	    		<p><strong><i class="chatter-alert-danger"></i> <?php echo e(Config::get('chatter.alert_messages.danger')); ?></strong> Porfavor arregla los siguientes errores:</p>
		        <ul>
		            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		                <li><?php echo e($error); ?></li>
		            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        </ul>
		    </div>
	    </div>
	<?php endif; ?>	

	<div class="container margin-top">
		
	    <div class="row">

	        <div class="col-md-12">
					
				<div class="conversation">
	                <ul class="discussions no-bg" style="display:block;">
	                	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                		<li data-id="<?php echo e($post->id); ?>" data-markdown="<?php echo e($post->markdown); ?>">
		                		<span class="chatter_posts">
		                			<?php if(!Auth::guest() && (Auth::user()->id == $post->user->id)): ?>
		                				<div id="delete_warning_<?php echo e($post->id); ?>" class="chatter_warning_delete">
		                					<i class="chatter-warning"></i>Seguro que quieres eliminar esta respuesta?
		                					<button class="btn btn-sm btn-danger pull-right delete_response">Sí, eliminar</button>
		                					<button class="btn btn-sm btn-default pull-right">No gracias</button>
		                				</div>
			                			<div class="chatter_post_actions">
			                				<p class="chatter_delete_btn">
			                					<i class="chatter-delete"></i> Eliminar
			                				</p>
			                				<p class="chatter_edit_btn">
			                					<i class="chatter-edit"></i> Editar
			                				</p>
			                			</div>
			                		<?php endif; ?>
			                		<div class="chatter_avatar">
										<?php $usuario = Auth::user()->avatar ?>
					        			<img src="/img/avatars/<?php echo e($usuario); ?>" style="width: 80px; height: 80px; float: left; border-radius: 50%; margin-left: -10px; margin-top: -7px;">
					        		</div>

					        		<div class="chatter_middle">
					        			<span class="chatter_middle_details"><a href="<?php echo e(\DevDojo\Chatter\Helpers\ChatterHelper::userLink($post->user)); ?>"><?php echo e(ucfirst($post->user->{Config::get('chatter.user.database_field_with_user_name')})); ?></a> <span class="ago chatter_middle_details"><?php echo e(\Carbon\Carbon::createFromTimeStamp(strtotime($post->created_at))->diffForHumans()); ?></span></span>
					        			<div class="chatter_body">
					        			
					        				<?php if($post->markdown): ?>
					        					<pre class="chatter_body_md"><?php echo e($post->body); ?></pre>
					        					<?= \DevDojo\Chatter\Helpers\ChatterHelper::demoteHtmlHeaderTags( GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $post->body ) ); ?>
					        					<!--?= GrahamCampbell\Markdown\Facades\Markdown::convertToHtml( $post->body ); ?-->
					        				<?php else: ?>
					        					<?= $post->body; ?>
					        				<?php endif; ?>
					        				
					        			</div>
					        		</div>

					        		<div class="chatter_clear"></div>
				        		</span>
		                	</li>
	                	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	           
	                </ul>
	            </div>

	            <div id="pagination"><?php echo e($posts->links()); ?></div>

	            <?php if(!Auth::guest()): ?>

	            	<div id="new_response">

	            		<div class="chatter_avatar">
	            			<?php $usuario = Auth::user()->avatar ?>
		        			<img src="/img/avatars/<?php echo e($usuario); ?>" style="width: 80px; height: 80px; float: left; border-radius: 50%; margin-left: -10px; margin-top: -7px;">
		        		</div>

			            <div id="new_discussion">
			        	

					    	<div class="chatter_loader dark" id="new_discussion_loader">
							    <div></div>
							</div>

				            <form id="chatter_form_editor" action="/<?php echo e(Config::get('chatter.routes.home')); ?>/posts" method="POST">

						        <!-- BODY -->
						    	<div id="editor">
									<?php if( $chatter_editor == 'tinymce' || empty($chatter_editor) ): ?>
										<label id="tinymce_placeholder">Agrega el contenido aquí</label>
					    				<textarea id="body" class="richText" name="body" placeholder=""><?php echo e(old('body')); ?></textarea>
					    			<?php elseif($chatter_editor == 'simplemde'): ?>
					    				<textarea id="simplemde" name="body" placeholder=""><?php echo e(old('body')); ?></textarea>
					    			<?php endif; ?>
								</div>

						        <input type="hidden" name="_token" id="csrf_token_field" value="<?php echo e(csrf_token()); ?>">
						        <input type="hidden" name="chatter_discussion_id" value="<?php echo e($discussion->id); ?>">
						    </form>

						</div><!-- #new_discussion -->
						<div id="discussion_response_email">
							<button id="submit_response" class="btn btn-success pull-right"><i class="chatter-new"></i> Agregar respuesta</button>
							<?php if(Config::get('chatter.email.enabled')): ?>
								<div id="notify_email">
									<img src="/vendor/devdojo/chatter/assets/images/email.gif" class="chatter_email_loader">
									<!-- Rounded toggle switch -->
									<span>Notifícame si alguien responde</span>
									<label class="switch">
									  	<input type="checkbox" id="email_notification" name="email_notification" <?php if(!Auth::guest() && $discussion->users->contains(Auth::user()->id)): ?><?php echo e('checked'); ?><?php endif; ?>>
									  	<span class="on">Sí</span>
										<span class="off">No</span>
									  	<div class="slider round"></div>
									</label>
								</div>
							<?php endif; ?>
						</div>
					</div>

				<?php else: ?>

					<div id="login_or_register">
						<p>Porfavor <a href="/<?php echo e(Config::get('chatter.routes.home')); ?>/login">Ingresa</a> o <a href="/<?php echo e(Config::get('chatter.routes.home')); ?>/register">registráte</a> para dejar una respuesta.</p>
					</div>

				<?php endif; ?>

	        </div>


	    </div>
	</div>

</div>

<input type="hidden" id="chatter_tinymce_toolbar" value="<?php echo e(Config::get('chatter.tinymce.toolbar')); ?>">
<input type="hidden" id="chatter_tinymce_plugins" value="<?php echo e(Config::get('chatter.tinymce.plugins')); ?>">
<input type="hidden" id="current_path" value="<?php echo e(Request::path()); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection(Config::get('chatter.yields.footer')); ?>

<?php if( $chatter_editor == 'tinymce' || empty($chatter_editor) ): ?>
	<script>var chatter_editor = 'tinymce';</script>
<?php elseif($chatter_editor == 'simplemde'): ?>
	<script>var chatter_editor = 'simplemde';</script>
<?php endif; ?>
<script src="/vendor/devdojo/chatter/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="/vendor/devdojo/chatter/assets/js/tinymce.js"></script>
<script>
	var my_tinymce = tinyMCE;
	$('document').ready(function(){

		$('#tinymce_placeholder').click(function(){
			my_tinymce.activeEditor.focus();
		});

	});
</script>

<script src="/vendor/devdojo/chatter/assets/js/simplemde.min.js"></script>
<script src="/vendor/devdojo/chatter/assets/js/chatter_simplemde.js"></script>


<script>
	$('document').ready(function(){

		var simplemdeEditors = [];

		$('.chatter_edit_btn').click(function(){
			parent = $(this).parents('li');
			parent.addClass('editing');
			id = parent.data('id');
			markdown = parent.data('markdown');
			container = parent.find('.chatter_middle');

			if(markdown){
				body = container.find('.chatter_body_md');
			} else {
				body = container.find('.chatter_body');
				markdown = 0;
			}

			details = container.find('.chatter_middle_details');
			
			// dynamically create a new text area
			container.prepend('<textarea id="post-edit-' + id + '"></textarea>');
            // Client side XSS fix
            $("#post-edit-"+id).text(body.html());
			container.append('<div class="chatter_update_actions"><button class="btn btn-success pull-right update_chatter_edit"  data-id="' + id + '" data-markdown="' + markdown + '"><i class="chatter-check"></i> Modificar respuesta</button><button href="/" class="btn btn-default pull-right cancel_chatter_edit" data-id="' + id + '"  data-markdown="' + markdown + '">Cancelar</button></div>');
			
			// create new editor from text area
			if(markdown){
				simplemdeEditors['post-edit-' + id] = newSimpleMde(document.getElementById('post-edit-' + id));
			} else {
				initializeNewEditor('post-edit-' + id);
			}

		});

		$('.discussions li').on('click', '.cancel_chatter_edit', function(e){
			post_id = $(e.target).data('id');
			markdown = $(e.target).data('markdown');
			parent_li = $(e.target).parents('li');
			parent_actions = $(e.target).parent('.chatter_update_actions');
			if(!markdown){
				tinymce.remove('#post-edit-' + post_id);
			} else {
				$(e.target).parents('li').find('.editor-toolbar').remove();
				$(e.target).parents('li').find('.editor-preview-side').remove();
				$(e.target).parents('li').find('.CodeMirror').remove();
			}
			
			$('#post-edit-' + post_id).remove();
			parent_actions.remove();

			parent_li.removeClass('editing');
		});

		$('.discussions li').on('click', '.update_chatter_edit', function(e){
			post_id = $(e.target).data('id');
			markdown = $(e.target).data('markdown');

			if(markdown){
				update_body = simplemdeEditors['post-edit-' + post_id].value();
			} else {
				update_body = tinyMCE.get('post-edit-' + post_id).getContent();
			}

			$.form('/<?php echo e(Config::get('chatter.routes.home')); ?>/posts/' + post_id, { _token: '<?php echo e(csrf_token()); ?>', _method: 'PATCH', 'body' : update_body }, 'POST').submit();
		});

		$('#submit_response').click(function(){
			$('#chatter_form_editor').submit();
		});

		// ******************************
		// DELETE FUNCTIONALITY
		// ******************************

		$('.chatter_delete_btn').click(function(){
			parent = $(this).parents('li');
			parent.addClass('delete_warning');
			id = parent.data('id');
			$('#delete_warning_' + id).show();
		});

		$('.chatter_warning_delete .btn-default').click(function(){
			$(this).parent('.chatter_warning_delete').hide();
			$(this).parents('li').removeClass('delete_warning');
		});

		$('.delete_response').click(function(){
			post_id = $(this).parents('li').data('id');
			$.form('/<?php echo e(Config::get('chatter.routes.home')); ?>/posts/' + post_id, { _token: '<?php echo e(csrf_token()); ?>', _method: 'DELETE'}, 'POST').submit();
		});

	});


</script>
<script src="/vendor/devdojo/chatter/assets/js/chatter.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make(Config::get('chatter.master_file_extend'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Proyecto\resources\views/vendor/chatter/discussion.blade.php ENDPATH**/ ?>