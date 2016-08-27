@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">{{ $task->task_title}}</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	<h3><b>Task Details:</b> {{ $task->task_details }}</h3>
	<p><b>Edited on:</b> {{ $task->edited_on }}</p>
	<a href="/edit-task/{{ $task->id }}" class="btn btn-primary">Edit Task</a>
	<a href="/delete-task/{{ $task->id }}" class="btn btn-danger">Delete Task</a>
	<hr>
@stop