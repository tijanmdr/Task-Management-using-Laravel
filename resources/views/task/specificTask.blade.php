@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">{{ $task->task_title}}</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	<h3><b>Task Details:</b> {{ $task->task_details }}</h3>
	<p><b>Edited on:</b> {{ $task->edited_on }}</p>
	<form action="/task/{{ $task->id }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="delete">
		<input type="submit" value="Delete Task" class="btn btn-danger">
	</form>
	<hr>
@stop