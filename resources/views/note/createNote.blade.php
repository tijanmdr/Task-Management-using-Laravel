@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">Insert a Note</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	<form action="/notes" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label>Name</label>
		<input type="text" class="form form-control" name="note_title"><br>
		<label>Details</label>
		<textarea class="form form-control" name="note_details"></textarea><br>
		<input type="date" class="form form-control" name="edited_on" value="{{ date('Y-m-d')}}"></input><br>
		<input type="submit" class="form form-control btn btn-primary" value="Insert a Note">
	</form>
	<hr>
@stop