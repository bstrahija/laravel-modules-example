<h3>{{ trans('content::navigation.channels') }}</h3>

<hr>

@foreach (Config::get('content::channels') as $channel)
	<h4>{{ $channel['title'] }}</h4>
	<p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
@endforeach
