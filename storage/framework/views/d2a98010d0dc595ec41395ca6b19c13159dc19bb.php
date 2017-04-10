<?php $__env->startSection('main'); ?>
        <h3 class="ui header">Hello <?php echo e(Auth::user()->name); ?></h3>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>