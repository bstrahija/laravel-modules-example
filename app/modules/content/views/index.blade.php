@extends('content::_layout.default')

@section('main')
	<div class="jumbotron">
		<h1>Jumbotron heading</h1>
		<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		<p><a class="btn btn-lg btn-success" href="{{ route('page', 'contact') }}">Contact us</a></p>
	</div>

	<div class="row marketing">
		<div class="col-lg-12">
			<h3>Channels</h3>

			<hr>

			@foreach (Config::get('content::channels') as $channel)
				<h4>{{ $channel['title'] }}</h4>
				<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
			@endforeach
		</div>
	</div>
@stop
