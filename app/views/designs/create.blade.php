@extends('layouts.scaffold')

@section('main')

<h1>Create Design</h1>

{{ Form::open(array('route' => 'designs.store')) }}
    <ul>
        <li>
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

        <li>
            {{ Form::submit('Submit', array('class' => 'btn')) }}
        </li>
    </ul>
{{ Form::close() }}

@if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif

@stop


