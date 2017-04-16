<?php $__env->startSection('main'); ?>
<div class="ui stackable grid container">

    <div class="two wide column"></div> 

    <div class="twelve wide column">  
        <?php $__currentLoopData = $dairies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dairy): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="ui raised piled segments ">
            <div class="ui secondary segment">
                <h1><?php echo e($dairy->created_at->format("d F Y")); ?></h1> 
            </div>
            <div class="ui segment">
                <?php echo $dairy->content; ?>

            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>    


    <div class="two wide column"></div>    

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>