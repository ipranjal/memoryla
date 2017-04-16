

<?php $__env->startSection('content'); ?>
<br>
<div class="ui stackable grid container">
    <div class="two wide column"></div> 

    <div class="twelve wide column">
        <center>

            <div class="ui compact raised segment">

                <img class="ui small circular image" src="http://ideaclicks.in/userimages/default_user.jpg">
                <br>

                <form class="ui form">                
                    <div>
                        <label for="file" class="ui icon button">
                            <i class="photo icon"></i>
                            Choose picture</label>
                        <input type="file" id="file" style="display:none">
                    </div>
                    <br>
                    <div class="field">
                        <input type="text" name="username" placeholder="Username">
                    </div>

                    <div class="field">
                        <input type="email" name="email" placeholder="Email">
                    </div>

                    <div class="field">
                        <div class="two fields">
                            <div class="field">
                                <input type="text" name="first-name" placeholder="First Name">
                            </div>
                            <div class="field">
                                <input type="text" name="last-name" placeholder="Last Name">
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui selection dropdown">
                            <input type="hidden" name="gender">
                            <i class="dropdown icon"></i>
                            <div class="default text">Gender</div>
                            <div class="menu">
                                <div class="item" data-value="1">Male</div>
                                <div class="item" data-value="0">Female</div>
                            </div>
                        </div>
                    </div>
                    <button class="ui green button">Submit</button>
                    <button class="ui red button">Skip</button>

                </form>

            </div>

        </center>
    </div>
</div>
<?php $__env->startPush('scripts'); ?>
<script>

    $('.field .dropdown')
            .dropdown()
            ;
</script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('setup.partials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>