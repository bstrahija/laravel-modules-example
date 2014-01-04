<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel Modules Example</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	@include('content::_partial.header')

	@yield('main')

	<hr>

	<footer>
		<p>&copy; 2013 Boris Strahija, Creo</p>
	</footer>
</div>

</body>
</html>
