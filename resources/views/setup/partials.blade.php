@extends('layouts.main')

@section('main')
<div class="ui grid container">
<div class="ui segment piled raised">
<div class="ui three steps">
  <div class="@if(Request::is('setup/1')) active @endif step">
    <i class="Unlock Alternate icon"></i>
    <div class="content">
      <div class="title">Protect</div>
      <div class="description">Choose an awesome password to secure your account</div>
    </div>
  </div>
  <div class="@if(Request::is('setup/2')) active @endif step">
    <i class="Child icon"></i>
    <div class="content">
      <div class="title">Personalize</div>
      <div class="description">Tell the world who you are</div>
    </div>
  </div>
  <div class="@if(Request::is('setup/3')) active @endif step">
    <i class="Users icon"></i>
    <div class="content">
      <div class="title">Connect</div>
      <div class="description">Connect with people and make memories</div>
    </div>
  </div>
</div>

    @yield('content')
</div>   
</div>
@endsection