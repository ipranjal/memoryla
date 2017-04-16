

<?php $__env->startSection('content'); ?>
<br>    <br><br><br><br>

<div class="ui stackable grid container">
    <div class="five wide column"></div>    
    <div class="six wide column">

        <div class="ui segment  raised">
            <form class="ui form">                

                <div class="field">
                    <input type="text" name="password" placeholder="password">
                </div>
                <div class="field">
                    <input type="text" name="confirm" placeholder="confirm password">
                </div>
                <center><button class="ui green button">Submit</button>
                    <button class="ui red button">Skip</button></center>

            </form>

        </div>
    </div>

    <div class="five wide column"></div>    
</div>


<br>    <br><br><br><br><br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('setup.partials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>