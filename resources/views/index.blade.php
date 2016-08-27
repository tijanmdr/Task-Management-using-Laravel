@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">Tasker</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	<div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 menulist menulistbordered">
		<h3>Tasks</h3>
		<hr>
		<h4><a href="/create-note">Create a Note</a></h4>
		<hr class="brokeLine">
		<h4><a href="/notes">Show all Notes</a></h4>
	</div>
	<div class="col-md-6 col-sm-6 col-xs-12 col-lg-6 menulist">
		<h3>Notes</h3>
		<hr>
		<h4><a href="/create-task">Create a Task</a></h4>
		<hr class="brokeLine">
		<h4><a href="/tasks">Show all Task</a></h4>
	</div>
	<div class="clear"></div>
	<hr>
@stop