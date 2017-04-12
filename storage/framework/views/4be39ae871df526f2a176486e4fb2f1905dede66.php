<?php $__env->startSection('main'); ?>
<div class="ui three top attached steps">
  <div class="<?php if(Request::is('setup/1')): ?> active <?php endif; ?> step">
    <i class="Unlock Alternate icon"></i>
    <div class="content">
      <div class="title">Protect</div>
      <div class="description">Choose an awesome password to secure your account</div>
    </div>
  </div>
  <div class="<?php if(Request::is('setup/2')): ?> active <?php endif; ?> step">
    <i class="Child icon"></i>
    <div class="content">
      <div class="title">Personalize</div>
      <div class="description">Tell the world who you are</div>
    </div>
  </div>
  <div class="<?php if(Request::is('setup/3')): ?> active <?php endif; ?> step">
    <i class="Users icon"></i>
    <div class="content">
      <div class="title">Connect</div>
      <div class="description">Connect with people and make memories</div>
    </div>
  </div>
</div>
<div class="ui attached segment">
    <?php echo $__env->yieldContent('content'); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>