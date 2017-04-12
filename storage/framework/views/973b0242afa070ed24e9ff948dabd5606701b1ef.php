<?php $__env->startSection('content'); ?>
<br>
<div class="ui stackable grid container">
    <div class="two wide column"></div>    
    <div class="twelve wide column">
        <div class="ui segment">
            <center>
            <form>
                <div class="ui input">
                    <input type="text" placeholder="Enter Password">
                </div><br><br>
                <div class="ui input">
                    <input type="text" placeholder="Repeat Password">
                </div>
            </form>
            </center>
        </div>
    </div>
    <div class="two wide column"></div>    

</div>

<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('setup.partials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>