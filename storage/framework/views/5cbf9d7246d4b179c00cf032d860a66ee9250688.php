<html>
    
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/semantic.css')); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo e(url('css/memoryla.css')); ?>"> 
        <?php echo $__env->yieldPushContent('head'); ?>
    </head>
    
    <body>
        
        <?php echo $__env->yieldContent('body'); ?>
        
        <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        
        <script src="<?php echo e(url('js/semantic.min.js')); ?>"></script>
        
         <?php echo $__env->yieldPushContent('scripts'); ?>
        
    </body>
    
</html>