<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hello City</title>
</head>
<body>
	
	@yield('content')

	<footer>
		<p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-us">Abut Us</a></p>
	</footer>
</body>
</html>
