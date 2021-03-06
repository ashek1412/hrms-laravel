<?php echo $__env->make('layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body class="tooltips">
        <div class="container">
            <div class="logo-brand header sidebar rows">
                <div class="logo">
                    <h1><a href="/"><?php echo e(config('config.application_name')); ?></a></h1>
                </div>
            </div>

            <?php if(Auth::check()): ?>
                <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php endif; ?>

            <div class="<?php echo e((Auth::check()) ? 'right' : ''); ?> content-page">

                <?php if(Auth::check()): ?>
                    <?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <?php endif; ?>

                <div class="body content rows scroll-y">

                    <?php echo $__env->yieldContent('breadcrumb'); ?>

                    <?php echo $__env->make('global.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    
                    <?php echo $__env->yieldContent('content'); ?>

                    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                </div>

            </div>

            <?php if($right_sidebar): ?>
                <div class="col-xs-7 col-sm-3 col-md-3 sidebar sidebar-right sidebar-animate">
                    <?php echo $__env->yieldContent('right_sidebar'); ?>
                </div>
            <?php endif; ?>
            
        <img id="loading-img" src="/images/loading.gif" />

        <div class="overlay"></div>
        <div class="modal fade-scale" id="myModal" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                </div>
            </div>
        </div>

    </div>

    <?php echo $__env->make('layouts.foot', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>