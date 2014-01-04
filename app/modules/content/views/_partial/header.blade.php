<div class="header">
	<ul class="nav nav-pills pull-right">
		<li class="{{ Route::is('home') ? 'active': null }}"><a href="{{ route('home') }}">{{ trans('content::navigation.home') }}</a></li>
		<li class="{{ (Route::is('page') and Request::segment(2) == 'about') ? 'active': null }}"><a href="{{ route('page', 'about') }}">{{ trans('content::navigation.about') }}</a></li>
		<li class="{{ (Route::is('blog') or Route::is('article')) ? 'active': null }}"><a href="{{ route('blog') }}">{{ trans('content::navigation.blog') }}</a></li>
		<li class="{{ (Route::is('page') and Request::segment(2) == 'contact') ? 'active': null }}"><a href="{{ route('page', 'contact') }}">{{ trans('content::navigation.contact') }}</a></li>
	</ul>
	<h3 class="text-muted"><a href="{{ route('home') }}">Laravel Modules Example</a></h3>
</div>

<hr>
