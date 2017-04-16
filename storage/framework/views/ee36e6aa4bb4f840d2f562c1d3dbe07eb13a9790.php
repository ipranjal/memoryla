<?php $__env->startPush('head'); ?>
<style>
    body {
        background : url(../img/<?php echo e(rand(1,7)); ?>.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }

        #wrapper {
            position: absolute;
            height: 100%;
            width: 100%;
            overflow: auto;
            box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, .2);
        }
    </style>
 <?php $__env->stopPush(); ?>

    <?php $__env->startSection('body'); ?>

    <div id='wrapper'>
        <div class="memoryla">
            &nbsp;&nbsp;&nbsp; Memoryla
        </div>
        <br>
        <br>
        <div class="ui stackable grid container">
            <div class="ten wide column"></div>
            
            <div class="five wide column">
                 <div class="ui inverted segment " style="opacity:0.7">
                     <br>
                     <center>  <div style="font-size:19px" >Where Memories are Built, Shared and Stored.</div></center>
                     <br>
                 </div>

                <div class="ui inverted segment " style="opacity:0.9">
                    <form class="ui inverted form  warning" method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <center>
                            <a class="ui facebook button" href="<?php echo e(url('redirect/facebook')); ?>">
                                <i class="facebook icon"></i>
                                Login with Facebook
                            </a>

                            <br><br>
                            <a class="ui google plus button" href="<?php echo e(url('redirect/google')); ?>">
                                <i class="google plus icon"></i>
                                Login with Google &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </a>
                        </center>
                        <div class="ui horizontal divider" style="color:white">
                            Or
                        </div>

                        <div class="field <?php echo e($errors->has('email') ? ' error' : ''); ?>">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>">
                        </div>
                        <?php if($errors->has('email')): ?>                 
                        <div class="ui warning message">
                            <p><?php echo e($errors->first('email')); ?></p>
                        </div>
                        <?php endif; ?>


                        <div class="field <?php echo e($errors->has('password') ? ' error' : ''); ?>">
                            <label class="left aligned">Password</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <?php if($errors->has('password')): ?>                 
                        <div class="ui warning message">
                            <p><?php echo e($errors->first('password')); ?></p>
                        </div>
                        <?php endif; ?>

                        <div class="field">
                            <div class="ui checkbox">
                                <input type="checkbox" tabindex="0" class="hidden">
                                <label>Remember me</label>
                            </div>
                        </div>
                        <center> <button class="ui green submit button" >Login</button></center>
                    </form>
                    Not a member yet? <a href="<?php echo e(url('register')); ?>">Sign up </a>
                </div>
                      <div class="ui inverted segment " style="opacity:0.7">
                     <center>  <div style="font-size:17px" >© Pranjal Pandey</div></center>
                 </div>
            </div>
            
            <div class="one wide colomn"></div>
        </div>
    </div>

    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>