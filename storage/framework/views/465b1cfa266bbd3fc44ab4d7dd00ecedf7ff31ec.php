		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php echo Form::label('contract_type_id',trans('messages.type'),[]); ?>

					<?php echo Form::select('contract_type_id', $contract_types,isset($user_contract) ? $user_contract->contract_type_id : '',['class'=>'form-control input-xlarge show-tick','title' => trans('messages.select_one')]); ?>

				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
				    <?php echo Form::label('title',trans('messages.title'),[]); ?>

					<?php echo Form::input('text','title',isset($user_contract) ? $user_contract->title : '',['class'=>'form-control','placeholder'=>trans('messages.title')]); ?>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="date_range"><?php echo e(trans('messages.date')); ?></label>
					<div class="input-daterange input-group" id="datepicker">
					    <input type="text" class="input-sm form-control" name="from_date" readonly value="<?php echo e(isset($user_contract) ? $user_contract->from_date : ''); ?>" />
					    <span class="input-group-addon"><?php echo e(trans('messages.to')); ?></span>
					    <input type="text" class="input-sm form-control" name="to_date" readonly value="<?php echo e(isset($user_contract) ? $user_contract->to_date : ''); ?>"  />
					</div>
				</div>
				<?php echo $__env->make('upload.index',['module' => 'user-contract','upload_button' => trans('messages.upload').' '.trans('messages.contract'),'module_id' => isset($user_contract) ? $user_contract->id : ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo Form::label('description',trans('messages.description'),[]); ?>

					<?php echo Form::textarea('description',isset($user_contract) ? $user_contract->description : '',['size' => '30x3', 'class' => 'form-control', 'placeholder' => trans('messages.description'),"data-show-counter" => 1,"data-limit" => config('config.textarea_limit'),'data-autoresize' => 1]); ?>

					<span class="countdown"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo getCustomFields('user-contract-form',isset($custom_user_contract_field_values) ? $custom_user_contract_field_values : []); ?>

			</div>
		</div>
	    <?php echo Form::submit(trans('messages.save'),['class' => 'btn btn-primary pull-right']); ?>

		<div class="clear"></div>