@extends('layouts.master')

@section('main')






 @foreach ($designs as $design)
 <p><a href="{{$design->projectname}}">Back To Project {{$design->projectname}}</a></p>

 <h1>Show Design # {{ $design->id }} in project {{$design->projectname}}</h1>

 <div id="fullimg" >
 <p>Rating: {{ $design->rating }}%</p>

<img src="{{ $design->url }}" class="fullimg" />
</div>

            

 @endforeach
<?php
$data = array('star1' => "ONE STAR" ,'star2' => "TWO STARS" ,'star3' => "THREE STARS" ,'star4' => "FOUR STARS" ,'star5' => "FIVE STARS" );
$percentage = round($design->rating); //45
$width = round(($percentage/20) * 16) ;
?>

<div style="background:url(http://wbotelhos.com/raty/lib/img/star-on.png) repeat-x left;width: {{ $width }}px;height:16px;position:absolute;z-index:1;"></div>
<div style="background:url(http://wbotelhos.com/raty/lib/img/star-off.png) repeat-x left;width:80px;height:16px;position:absolute"></div>

<br />


{{ Form::model($designs, array('method' => 'PATCH', 'route' => array('designs.update', $design->id))) }}
     
     
       
            {{ Form::label('Rating', 'rating:') }}
            {{ Form::select('rating', $data, 'star5') }}
         
            {{ Form::submit('Update', array('class' => 'btn')) }}
         
     
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop

 