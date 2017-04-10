@extends('layouts.app')

@section('head')
<style>
    body {
        background : url(../img/{{rand(1,7)}}.jpg) no-repeat center center fixed;
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
    @endsection

    @section('body')
    

    <div id='wrapper'>
        <div class="memoryla">
             Memoryla
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
                    <form class="ui inverted form  warning" method="POST" action="{{ route('login') }}">
                        {{csrf_field()}}

                        <div class="field {{ $errors->has('name') ? ' error' : '' }}">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="Name" value="{{old('name')}}">
                        </div>
                        @if ($errors->has('name'))                 
                        <div class="ui warning message">
                            <p>{{ $errors->first('name') }}</p>
                        </div>
                        @endif                       

                        <div class="field {{ $errors->has('email') ? ' error' : '' }}">
                            <label>Email</label>
                            <input type="text" name="email" placeholder="Email" value="{{old('email')}}">
                        </div>
                        @if ($errors->has('email'))                 
                        <div class="ui warning message">
                            <p>{{ $errors->first('email') }}</p>
                        </div>
                        @endif


                        <div class="field {{ $errors->has('password') ? ' error' : '' }}">
                            <label class="left aligned">Password</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        @if ($errors->has('password'))                 
                        <div class="ui warning message">
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                        @endif

                        <div class="field {{ $errors->has('password') ? ' error' : '' }}">
                            <label class="left aligned">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password">
                        </div>
                        @if ($errors->has('password'))                 
                        <div class="ui warning message">
                            <p>{{ $errors->first('password') }}</p>
                        </div>
                        @endif

                        <center> <button class="ui green submit button" >Sign up</button></center>
                    </form>
                    Already a member? <a href="{{url('login')}}">Login </a>
                </div>
                   <div class="ui inverted segment " style="opacity:0.7">
                     <center>  <div style="font-size:17px" >© Pranjal Pandey</div></center>
                 </div>
            </div>
  
            <div class="one wide colomn"></div>
        </div>
    </div>

    @endsection
