@extends('layouts.scaffold')

@section('main')

<h1>Show Design</h1>

<p>{{ link_to_route('designs.index', 'Return to all designs') }}</p>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Projectname</th>
				<th>Url</th>
				<th>Rating</th>
        </tr>
    </thead>

    <tbody>
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
    </tbody>
</table>

@stop