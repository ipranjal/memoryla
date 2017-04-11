<?php $__env->startSection('body'); ?>

<?php echo $__env->make('components.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Content --> 
<div class="pusher">

    <!-- Topbar-->
    <div class="ui violet top fixed inverted menu"> 

        <a class="item">
            <i class="sidebar icon"></i>
        </a>
        <!--Left item-->
        <div class="header item">
            Memoryla 
        </div>
        <!--Right Item-->   
        <div class="right menu">
            <?php if(!Request::is('setup')): ?>
            <div class="item">
                <div class="ui icon input">
                    <input type="text" placeholder="Search...">
                    <i class="search link icon"></i>
                </div>
            </div>
            <?php endif; ?>
            <a class="ui item" href="<?php echo e(url('logout')); ?>" class="item">Logout</a>
        </div>
    </div>
    <!--End topbar-->




    <!--content-->
    <div class="memoryla-body">
        <?php echo $__env->yieldContent('main'); ?>
    </div>
    <!--end content-->

</div>


<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>