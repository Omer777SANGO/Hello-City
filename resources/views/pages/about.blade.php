@extends('base')

<!-- 1re manière de faire -->
@section('title', 'About Us | '. config('mesvariables.name'))

<!-- 2e manière de faire --> 
<!-- @section('title')
	About Us | Hello City 
@endsection -->

@section('content')
<img src="{{ asset('/images/wozaka.jpg') }}" alt="Logo WOZAKA" class="my-12 rounded-full shadow-md">

	<h2 class="mb-5 text-gray-700">
		Built with <span class="text-pink-500">&hearts;</span> by WOZAKA
	</h2>

	<p>
		<a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
	</p>
@endsection
