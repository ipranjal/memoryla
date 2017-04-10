@extends('layouts.main')


@section('main')
<div class="ui stackable grid container">

    <div class="two wide column"></div> 

    <div class="twelve wide column">  
        @foreach($dairies as $dairy)
        <div class="ui raised piled segments ">
            <div class="ui secondary segment">
                <h1>{{$dairy->created_at->format("d F Y")}}</h1> 
            </div>
            <div class="ui segment">
                {!! $dairy->content !!}
            </div>
        </div>
        @endforeach
    </div>    


    <div class="two wide column"></div>    

</div>
@endsection