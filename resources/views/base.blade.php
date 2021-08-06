<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title', config('mesvariables.name'))</title>
	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"> 
</head>
<body class="py-6 flex flex-col justify-between items-center min-h-screen">
	<main role="main" class="flex flex-col justify-center items-center">
		@yield('content')
	</main>
	
	<footer>
		<p class="text-gray-400">&copy; Copyright {{ date('Y') }} 

			@if(! Route::is('about')) <!-- ceci va retourner true si on est sur la route home -->
				&middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline">About Us</a>
			@endif
		</p>
	</footer>
</body>
</html>
