@extends('layouts.master')
@section('title')
<?php $loop=0; ?>
 @foreach ($designs as $design)
 @if ($loop == 0)
 {{$design->projectname}}
 @endif
 <?php $loop=1; ?>
 @endforeach
@stop
@section('main')
<br />
<section class="note">
<img src="{{ url('images/rate-me.png')}}" alt="RATE ME" class="rateme" />
<h2>This is customized designs for you to share</h2>
<p>Please, share these design with your friends to get their votes to help you decide what's better!</p>
</section>
<div class="tagline-shadow"></div>

<?php 
//Page Variables
$data = array('star1' => "20%" ,'star2' => "40%" ,'star3' => "60%" ,'star4' => "80%" ,'star5' => "100%" );
$x = 1;  $y = 0;   $r = 0;
 ?>



 @foreach ($designs as $design)

 <div id="img{{ $design->id }}" class="item">
<a href="{{ $design->id }}"><img src="{{ $design->url }}"  alt="RATING: {{ $design->rating }}%" class="img" /></a>
    <div class="caption">
		<?php
			$width = round(($design->rating/20) * 48) ;
		?>
		<p style="padding:0;margin:auto;background:url(http://cdn1.iconfinder.com/data/icons/onebit/PNG/onebit_44.png) repeat-x left;width:{{$width}}px;z-index:1;" class="rating"></p>
		<p style="padding:0;margin:auto;background:url(http://cdn1.iconfinder.com/data/icons/onebit/PNG/onebit_46.png) repeat-x left;width:240px;" class="rating"></p>
        <a href="{{ $design->id }}" class="btn">Desgin# {{ $x++ }}</a>

   </div>
</div>

 
<?php 
//ForEach vars
    $y++;
    $r = $design->rating + $r;  
?>
 @endforeach
 <br />
 <br />
 <br />
 <br />
 <br />
 <br />

<?php
 //echo "<h1>Overall rating: " . round($r/$y) . "% </h1>";
 //$percentage = round($r/$y); //45
 //$width = round(($percentage/20) * 16) ;
?>
<!--
 <p>{{ link_to_route('designs.index', 'Return to all designs') }}</p>

<div style="background:url(http://wbotelhos.com/raty/lib/img/star-on.png) repeat-x left;width: {{ $width }}px;height:16px;position:absolute;z-index:1;"></div>
<div style="background:url(http://wbotelhos.com/raty/lib/img/star-off.png) repeat-x left;width:80px;height:16px;position:absolute"></div>
-->


@stop

 