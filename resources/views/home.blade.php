@extends('layouts.main')

@section('main')
        <h3 class="ui header">Hello {{Auth::user()->name}}</h3>
@endsection


