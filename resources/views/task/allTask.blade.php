@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">All Tasks</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	@if(count($task))
		<h3 class="text-right"><a href="/create-task">Insert a task</a></h3>
		@foreach($task as $tasks)
			<h2><a href="/task/{{$tasks->id}}">{{ $tasks->task_title}}</a></h2>
			<h3><b>Task Details:</b> {{ $tasks->task_details }}</h3>
			<p><b>Edited on:</b> {{ $tasks->edited_on }}</p>
			<hr>
		@endforeach
	@else
		<h2>Sorry, there are no task available</h2>
		<h3><a href="/create-task">Insert a task</a></h3>
		<hr>
	@endif
@stop