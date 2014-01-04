@extends('content::_layout.default')

@section('main')
	<div class="col-lg-123">
		<h2>{{ $entry->title }}</h2>
		{{ $entry->body }}
	</div>
@stop
