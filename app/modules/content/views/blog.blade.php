@extends('content::_layout.default')

@section('main')
	<div class="col-lg-123">
		<h2>Blog</h2>

		@if ($entries)
			@foreach ($entries as $entry)
				<hr>

				<article>
					<h3><a href="{{ route('article', $entry->slug) }}">{{ $entry->title }}</a></h3>
					<h6><em>{{ $entry->created_at }}</em></h6>
					<p>{{ Str::limit($entry->body, 50) }}</p>
				</article>
			@endforeach

			<hr>

			{{ $entries->links() }}
		@else
			<p>No articles found.</p>
		@endif
	</div>
@stop
