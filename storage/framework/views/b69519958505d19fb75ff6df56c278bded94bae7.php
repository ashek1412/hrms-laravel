	<?php $__env->startSection('breadcrumb'); ?>
		<ul class="breadcrumb">
		    <li><a href="/home"><?php echo trans('messages.home'); ?></a></li>
		    <li class="active"><?php echo trans('messages.announcement'); ?></li>
		</ul>
	<?php $__env->stopSection(); ?>
	
	<?php $__env->startSection('content'); ?>
		<div class="row">
			<?php if(Entrust::can('create-announcement')): ?>
			<div class="col-md-12 collapse" id="box-detail">
				<div class="box-info">
					<h2><strong><?php echo trans('messages.add_new'); ?></strong> <?php echo trans('messages.announcement'); ?></h2>
					<div class="additional-btn">
						<button class="btn btn-sm btn-primary" data-toggle="collapse" data-target="#box-detail"><i class="fa fa-minus icon"></i> <?php echo trans('messages.hide'); ?></button>
					</div>
					<?php echo Form::open(['route' => 'announcement.store','role' => 'form', 'class'=>'announcement-form','id' => 'announcement-form','data-file-upload' => '.file-uploader']); ?>

						<?php echo $__env->make('announcement._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php echo Form::close(); ?>

				</div>
			</div>
			<?php endif; ?>

			<div class="col-md-12">
				<div class="box-info full">
					<h2><strong><?php echo trans('messages.list_all'); ?></strong> <?php echo trans('messages.announcement'); ?>

					</h2>
					<div class="additional-btn">
						<?php if(Entrust::can('create-announcement')): ?>
							<a href="#" data-toggle="collapse" data-target="#box-detail"><button class="btn btn-sm btn-primary"><i class="fa fa-plus icon"></i> <?php echo trans('messages.add_new'); ?></button></a>
						<?php endif; ?>
					</div>
					<?php echo $__env->make('global.datatable',['table' => $table_data['announcement-table']], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
			</div>
            <div class="col-md-6">
                <div class="box-info">
                    <div id="audience-wise-announcement-graph"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box-info">
                    <div id="designation-wise-announcement-graph"></div>
                </div>
            </div>
		</div>

	<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>