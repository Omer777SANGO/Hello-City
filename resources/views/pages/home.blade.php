@extends('base')

<!-- 1re manière de faire si le contenu est simple -->
@section('title', 'Hello City')

<!-- 2e manière de faire -->
<!-- @section('title')
	Hello City
@endsection -->

@section('content')
	<h1>Hello from Burkina !</h1>

	<p>It's currently {{ date('h:i A') }}.</p>
@endsection 
