@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">{{ $note->note_title }}</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	<h3><b>Task Details:</b> {{ $note->note_details }}</h3>
	<p><b>Edited on:</b> {{ $note->edited_on }}</p>
	<a href="/edit-note/{{ $note->id }}" class="btn btn-primary">Edit Note</a>
	<a href="/delete-note/{{ $note->id }}" class="btn btn-danger">Delete Note</a>
	<hr>
@stop