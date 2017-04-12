<?php $__env->startSection('content'); ?>
<br>
<div class="ui stackable grid container">
    <div class="two wide column"></div>    
    <div class="twelve wide column">
        <div class="ui segment">
            <center>

                <form><div class="four wide column">
                        <div class="ui left aligned segment

                             ui green segment"> <h1>How do you look?</h1></div>
                    </div><br>
                    <div class="ui compact raised segment">
                        <h2>Fill your details</h2>
                        <div class="ui huge icon input">

                            <input type="text" placeholder="Username">
                        </div>
                        <br>
                        <br>
                        <div class="ui huge icon input">
                            <div class="ui input">
                                <input type="text" placeholder="First Name">
                            </div></div>
                        <br>
                        <br><div class="ui huge icon input">
                            <div class="ui input">
                                <input type="text" placeholder="Last Name">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="ui form">
                            <div class="grouped fields">
                                <label>Gender</label>
                                <div class="field">
                                    <div class="ui slider checkbox">
                                        <input type="radio" name="throughput" checked="checked">
                                        <label>Male</label>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui slider checkbox">
                                        <input type="radio" name="throughput">
                                        <label>Female</label>
                                    </div>
                                </div>
                               
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>



                </form></center></div>



    
    <?php $__env->stopSection(); ?>




<?php echo $__env->make('setup.partials', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>