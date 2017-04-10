<?php $__env->startSection('main'); ?>


<div class='ui stackable grid container'>
     <div class='two wide column'></div>
     <div class='ui segment'>
    <div class='four wide column'>
        <h1> Things I did </h1>
    </div></div>
         <div class='one wide column'></div>
        
   
     <div class='ui segment'>
    <div class='two wide column'>
        <h1> Things I learned</h1>
    </div>
     </div>
     <div class='one wide column'></div>
     <div class='ui segment'>
    <div class='two wide column'>
         <h1>Things I read</h1>
    </div>
         
    </div>
    <div class='six wide column'></div>
</div>
<?php $__env->stopSection(); ?>
    
    
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>