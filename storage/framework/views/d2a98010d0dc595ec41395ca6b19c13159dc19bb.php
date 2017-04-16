

<?php $__env->startSection('main'); ?>
         <div class="ui stackable grid container">

    <div class="two wide column"></div> 

    <div class="twelve wide column">  
                <h3 class="ui header">Hello <?php echo e(Auth::user()->name); ?></h3>

        <div class="ui raised segment">
         Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus aliquam, nisl non rutrum accumsan, sem tellus ornare nibh, et rhoncus erat ante sit amet tortor. Cras vitae turpis libero. In ac nibh et urna sodales pharetra vitae in urna. Donec suscipit neque est, non porta mi tincidunt id. Maecenas accumsan mauris ut ante porttitor, ut commodo sapien dignissim. Quisque mollis tempor tellus, ac laoreet enim. Vivamus sit amet volutpat libero, faucibus ornare turpis. Suspendisse id justo nibh. Aenean cursus lacus velit, nec ultrices diam euismod ut.
        </div>
    </div>    


    <div class="two wide column"></div>    

</div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>