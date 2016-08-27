@extends('layout')

@section('content')
	<h1>All Tasks</h1>
	<hr>
	@foreach($task as $tasks)
		<h2>{{ $tasks->task_title}}</h2>
		<h3><b>Task Details:</b> {{ $tasks->task_details }}</h3>
		<p><b>Edited on:</b> {{ $tasks->edited_on }}</p>
		<hr>
	@endforeach
@stop