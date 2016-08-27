@extends('layout')

@section('content')
	<h1>All Notes</h1><hr>
	@foreach($note as $notes)
		<h2>{{ $notes->note_title}}</h2>
		<h3><b>Task Details:</b> {{ $notes->note_details }}</h3>
		<p><b>Edited on:</b> {{ $notes->edited_on }}</p>
		<hr>
	@endforeach
@stop