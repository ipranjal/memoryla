@extends('setup.partials')

@section('content')
<br>
<div class="ui stackable grid container">
    <div class="two wide column"></div>    
    <div class="twelve wide column">
        <div class="ui segment">
            <center>

                <form><div class="four wide column">
                      
                   
                    <br>
                    <img class="ui medium circular image" src="https://memecrunch.com/meme/B7AX0/sjkd/image.png?w=500&c=1">
                    </div>
                    <br>
                    <div class="ui raised segment">
                        <h2>Fill your details</h2>
                        <div class="ui massive icon input">

                            <input type="text" placeholder="Username">
                        </div>
                        <br>
                        <br>
                        <div class="ui massive icon input">
                            <div class="ui input">
                                <input type="text" placeholder="First Name">
                            </div></div>
                        <br>
                        <br><div class="ui massive icon input">
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




        @endsection



