@extends('layouts.scaffold')

@section('main')
<?php 
$data = array('star1' => "20%" ,'star2' => "40%" ,'star3' => "60%" ,'star4' => "80%" ,'star5' => "100%" );
 ?>
<h1>Edit Design</h1>
{{ Form::model($design, array('method' => 'PATCH', 'route' => array('designs.update', $design->id))) }}
    <ul>
       <!-- <li>
            {{ Form::label('projectname', 'Projectname:') }}
            {{ Form::text('projectname') }}
        </li>

        <li>
            {{ Form::label('url', 'Url:') }}
            {{ Form::text('url') }}
        </li>

        <li>
            {{ Form::label('rating', 'Rating:') }}
            {{ Form::text('rating') }}
        </li>
-->
        <li>
            {{ Form::label('Rating', 'rating:') }}
            {{ Form::select('rating', $data, '20%') }}
        </li>
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            {{ link_to_route('designs.show', 'Cancel', $design->id, array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop