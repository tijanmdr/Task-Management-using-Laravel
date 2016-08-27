@extends('layout')

@section('content')
	<h1>{{ $note->note_title }}</h1>
	<hr>
	<h3><b>Task Details:</b> {{ $note->note_details }}</h3>
	<p><b>Edited on:</b> {{ $note->edited_on }}</p>
@stop