<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', config('mesvariables.name'))</title>
</head>
<body>

	@yield('content')

	<footer>
		<p>&copy; Copyright {{ date('Y') }} 

			@if(! Route::is('about')) <!-- ceci va retourner true si on est sur la route home -->
				&middot; <a href="{{ route('about') }}">About Us</a>
			@endif
		</p>
	</footer>
</body>
</html>
