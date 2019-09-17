@extends('layouts.master')
@section('content')
	<div class="container">
		<table class="table">
  			<thead>
    			<tr>
      				<th scope="col">ID</th>
      				<th scope="col">TITLE</th>
     				<th scope="col">DESCRIPTION</th>
      				<th scope="col">DUE_DATE</th>
      				<th scope="col">Actions</th>
   				</tr>
  			</thead>
  			<tbody>
  	@foreach($projects as $project)
  		<tr>
  			<td>{{ $project->id }}</td>
  			<td>{{ $project->title }}</td>
  			<td>{{ $project->description }}</td>
  			<td>{{ \Carbon\Carbon::parse($project->due_date)->toFormattedDateString() }}</td>
  			<td><a href="/projects/{{ $project->id }}">View</a></td>
  		</tr>
  	@endforeach
  			</tbody>
			</table>
			<a class="btn btn-primary" href="/projects/add">New Project</a>
	</div>
@endsection
