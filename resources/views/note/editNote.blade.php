@extends('layout')

@section('content')
	<h1>Edit: {{ $note->note_title}}</h1>
	<hr>
	<form action="/note/{{ $note->id }}" method="POST">
		<input type="hidden" name="_method" value="PATCH">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label>Name</label>
		<input type="text" class="form form-control" name="note_title" value="{{ $note->note_title }}"><br>
		<label>Details</label>
		<textarea class="form form-control" name="note_details">{{ $note->note_details }}</textarea><br>
		<input type="date" class="form form-control" name="edited_on" value="{{ $note->edited_on }}"><br>
		<input type="submit" class="form form-control btn btn-primary" value="Update note">
	</form>
@stop