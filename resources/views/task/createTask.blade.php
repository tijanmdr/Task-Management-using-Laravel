@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">Add a Task</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	<form action="/tasks/" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label>Name</label>
		<input type="text" class="form form-control" name="task_title"><br>
		<label>Details</label>
		<textarea class="form form-control" name="task_details"></textarea><br>
		<input type="date" class="form form-control" name="edited_on" value="{{ date('Y-m-d')}}"></input><br>
		<input type="submit" class="form form-control btn btn-primary" value="Insert a Task">
	</form>
	<hr>
@stop