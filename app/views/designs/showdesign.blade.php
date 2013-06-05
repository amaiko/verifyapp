@extends('layouts.master')
@section('title')
 @foreach ($designs as $design)
  {{$design->projectname}}
 @endforeach
@stop
@section('main')






 @foreach ($designs as $design)
 <?php 
	$size = getimagesize($design->url);
	$imgWidth = $size[0]; 
	$imgHeight = $size[1]; 
?>

 <div id="imgdiv"  >
<a href="#"  class="btn">CLOSE PREVIEW</a>
<img src="{{ $design->url }}" alt="Rating: {{ $design->rating }}%" id="previewimg" style="width:{{$imgWidth}}px;height:{{$imgHeight}}px;" />
</div>
 <br />
 <section class="note">
<h2>Design# {{ $design->id }} in project "<a href="{{$design->projectname}}">{{$design->projectname}}</a>"</h2>
<p>Please, share these design with your friends to get their votes to help you decide what's better!</p>
<p class="back"><a href="{{$design->projectname}}" class="myButton">Back</a></p>

</section>
<div class="tagline-shadow"></div>



 <div id="fullimg" >
 <a href="#" id="showimg"><img src="{{ $design->url }}" alt="Rating: {{ $design->rating }}%" class="fullimg" /></a>
</div>


          

 @endforeach
<?php
$data = array('star1' => "" ,'star2' => "" ,'star3' => "" ,'star4' => "" ,'star5' => "" );
$percentage = round($design->rating); //45
$width = round(($percentage/20) * 48) ;
?>
<div class="left" style="height:100px;margin:10px 0 0 0">
<div style="background:url(http://cdn1.iconfinder.com/data/icons/onebit/PNG/onebit_44.png) repeat-x left;width: {{ $width }}px;height:48px;position:absolute;z-index:100;"></div>
<div style="background:url(http://cdn1.iconfinder.com/data/icons/onebit/PNG/onebit_46.png) repeat-x left;width:240px;height:48px;position:absolute"></div>
<p  style="font-size:20px;margin:65px 0 10px 35px;">CURRENT RATING</p>

</div>

<div class="right" style="height:80px;margin:10px 0 10px 0">
{{ Form::model($designs, array('method' => 'PATCH', 'route' => array('designs.update', $design->id))) }}
     
     
       
            {{ Form::select('rating', $data, 'star5', array('id' => 'tech')) }}      
            {{ Form::submit('VOTE', array('class' => 'myButton')) }}
         
     
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
<p  style="font-size:20px;margin:5px 0 10px 65px;">YOUR RATING</p>

</div>
@stop

 