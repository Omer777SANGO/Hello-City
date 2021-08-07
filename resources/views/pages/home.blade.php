@extends('layouts.base')

<!-- 1re manière de faire si le contenu est simple -->
<!-- @section('title', config('mesvariables.name')) -->

<!-- 2e manière de faire -->
<!-- @section('title')
	Hello City
@endsection -->

@section('content')
	<img src="{{ asset('/images/Burkina_Faso.png') }}" alt="Burkina Faso" class="mt-12 rounded shadow-md h-32">

	<h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">Hello from Burkina !</h1>

	<p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}.</p>
@endsection 
