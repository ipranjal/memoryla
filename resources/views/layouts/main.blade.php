@extends('layouts.app')

@section('body')

@include('components.sidebar')

<!-- Content --> 
<div class="pusher">

    <!-- Topbar-->
    <div class="ui violet top fixed inverted menu"> 

        <a class="item">
            <i class="sidebar icon"></i>
        </a>
        <!--Left item-->
        <div class="header item">
            Memoryla 
        </div>
        <!--Right Item-->   
        <div class="right menu">
            @if(!Request::is('setup/*'))
            <div class="item">
                <div class="ui icon input">
                    <input type="text" placeholder="Search...">
                    <i class="search link icon"></i>
                </div>
            </div>
            @endif
            <a class="ui item" href="{{url('logout')}}" class="item">Logout</a>
        </div>
    </div>
    <!--End topbar-->




    <!--content-->
    <div class="memoryla-body">
        @yield('main')
    </div>
    <!--end content-->

</div>


@endsection


