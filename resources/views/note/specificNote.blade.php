@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">{{ $note->note_title }}</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	<h3><b>Task Details:</b> {{ $note->note_details }}</h3>
	<p><b>Edited on:</b> {{ $note->edited_on }}</p>
	<a href="/delete-note/{{ $note->id }}" class="btn btn-danger">Delete Note</a>
	<hr>
	<!-- <form action="/note/{{ $note->id }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="delete">
		<input type="submit" value="Delete Note" class="btn btn-danger">
	</form> -->
@stop