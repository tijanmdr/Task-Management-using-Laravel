@extends('layout')

@section('content')
	<h1>{{ $task->task_title}}</h1>
	<hr>
	<h3><b>Task Details:</b> {{ $task->task_details }}</h3>
	<p><b>Edited on:</b> {{ $task->edited_on }}</p>
@stop