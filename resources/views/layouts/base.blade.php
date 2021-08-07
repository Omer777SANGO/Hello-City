<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <title>@yield('title', config('mesvariables.name'))</title> -->

	<!-- <title>{{ isset($title) ? $title . ' | ' . config('mesvariables.name') : config('mesvariables.name') }}</title> -->

	<!-- Utilisation de fonction helper pour afficher le titre des pages -->
	<title>{{ page_title($title ?? null) }}</title>

	<link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"> 
</head>
<body class="py-6 flex flex-col justify-between items-center min-h-screen">
	<main role="main" class="flex flex-col justify-center items-center">
		@yield('content')
	</main>
	
	@include('layouts/partials/_footer')
</body>
</html>
