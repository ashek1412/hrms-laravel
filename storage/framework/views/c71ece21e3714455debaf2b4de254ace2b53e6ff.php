	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
		<h4 class="modal-title"><?php echo trans('messages.edit').' '.trans('messages.location'); ?></h4>
	</div>
	<div class="modal-body">
		<?php echo Form::model($location,['method' => 'PATCH','route' => ['location.update',$location] ,'class' => 'location-edit-form','id' => 'location-edit-form']); ?>

			<?php echo $__env->make('location._form', ['buttonText' => trans('messages.update')], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::close(); ?>

		<div class="clear"></div>
	</div>