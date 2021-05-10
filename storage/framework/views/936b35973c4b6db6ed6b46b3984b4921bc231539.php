		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
				    <?php echo Form::label('institute_name',trans('messages.institute').' '.trans('messages.name')); ?>

					<?php echo Form::input('text','institute_name',isset($user_qualification) ? $user_qualification->institute_name : '',['class'=>'form-control','placeholder'=>trans('messages.institute').' '.trans('messages.name')]); ?>

				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo Form::label('education_level_id',trans('messages.education').' '.trans('messages.level'),[]); ?>

					<?php echo Form::select('education_level_id', $education_levels,isset($user_qualification) ? $user_qualification->education_level_id : '',['class'=>'form-control input-xlarge show-tick','title' => trans('messages.select_one')]); ?>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<?php echo Form::label('qualification_language_id',trans('messages.qualification').' '.trans('messages.language'),[]); ?>

					<?php echo Form::select('qualification_language_id', $qualification_languages,isset($user_qualification) ? $user_qualification->qualification_language_id : '',['class'=>'form-control input-xlarge show-tick','title' => trans('messages.select_one')]); ?>

				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo Form::label('qualification_skill_id',trans('messages.skill'),[]); ?>

					<?php echo Form::select('qualification_skill_id', $qualification_skills,isset($user_qualification) ? $user_qualification->qualification_skill_id : '',['class'=>'form-control input-xlarge show-tick','title' => trans('messages.select_one')]); ?>

				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo Form::label('qualification_score_type_id',trans('messages.score'),[]); ?>

					<?php echo Form::select('qualification_score_type_id', $qualification_score_types,isset($user_qualification) ? $user_qualification->qualification_score_type_id : '',['class'=>'form-control input-xlarge show-tick','title' => trans('messages.select_one')]); ?>

				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo Form::label('qualification_score',trans('messages.score_val')); ?>

					<?php echo Form::input('text','qualification_score',isset($user_qualification) ? $user_qualification->qualification_score : '',['class'=>'form-control','placeholder'=>trans('messages.score_val')]); ?>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="date_range"><?php echo e(trans('messages.date')); ?></label>
					<div class="input-daterange input-group" id="datepicker">
					    <input type="text" class="input-sm form-control" name="from_date" readonly value="<?php echo e(isset($user_qualification) ? $user_qualification->from_date : ''); ?>" />
					    <span class="input-group-addon"><?php echo e(trans('messages.to')); ?></span>
					    <input type="text" class="input-sm form-control" name="to_date" readonly value="<?php echo e(isset($user_qualification) ? $user_qualification->to_date : ''); ?>"  />
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<?php echo $__env->make('upload.index',['module' => 'user-qualification','upload_button' => trans('messages.upload').' '.trans('messages.qualification'),'module_id' => isset($user_qualification) ? $user_qualification->id : ''], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<?php echo Form::label('description',trans('messages.description'),[]); ?>

					<?php echo Form::textarea('description',isset($user_qualification) ? $user_qualification->description : '',['size' => '30x3', 'class' => 'form-control', 'placeholder' => trans('messages.description'),"data-show-counter" => 1,"data-limit" => config('config.textarea_limit'),'data-autoresize' => 1]); ?>

				<span class="countdown"></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php echo e(getCustomFields('user-qualification-form',isset($custom_user_qualification_field_values) ? $custom_user_qualification_field_values : [])); ?>

			</div>
		</div>
	    <?php echo Form::submit(trans('messages.save'),['class' => 'btn btn-primary pull-right']); ?>

		<div class="clear"></div>