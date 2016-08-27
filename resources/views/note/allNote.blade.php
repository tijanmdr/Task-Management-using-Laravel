@extends('layout')

@section('content')
	<h1 class="col-md-6 col-sm-6 col-xs-12 col-lg-6">All Notes</h1>
	@include('partials.menu')
	<div class="clear"></div>
	<hr>
	@if (count($note))
		@foreach ($note as $notes)
			<h2><a href="/note/{{ $notes->id }}">{{ $notes->note_title}}</a></h2>
			<h3><b>Task Details:</b> {{ $notes->note_details }}</h3>
			<p><b>Edited on:</b> {{ $notes->edited_on }}</p>
			<hr>
		@endforeach
	@else
		<h2>Sorry, there are no notes available</h2>
		<h3><a href="/create-note">Insert a note</a></h3>
		<hr>
	@endif
@stop