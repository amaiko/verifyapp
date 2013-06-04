@extends('layouts.scaffold')

@section('main')

<h1>All Designs</h1>

<p>{{ link_to_route('designs.create', 'Add new design') }}</p>

     <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Projectname</th>
				<th>Rating</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($designs as $design)
                <tr>
                    <td><a href="/designs/{{$design->projectname}}" >{{$design->projectname}}</a></td>
 					<td>{{ $design->rating }}</td>
             
                </tr>
  
            @endforeach
        </tbody>
    </table>
 

@stop