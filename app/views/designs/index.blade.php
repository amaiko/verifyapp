@extends('layouts.scaffold')

@section('main')

<h1>All Designs</h1>

<p>{{ link_to_route('designs.create', 'Add new design') }}</p>

@if ($designs->count())
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Projectname</th>
				<th>Url</th>
				<th>Rating</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($designs as $design)
                <tr>
                    <td>{{ $design->projectname }}</td>
					<td>{{ $design->url }}</td>
					<td>{{ $design->rating }}</td>
                    <td>{{ link_to_route('designs.edit', 'Edit', array($design->id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('designs.destroy', $design->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    There are no designs
@endif

@stop