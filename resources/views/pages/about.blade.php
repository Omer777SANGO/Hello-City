@extends('base')

<!-- 1re manière de faire -->
@section('title', 'About Us | '. config('mesvariables.name'))

<!-- 2e manière de faire -->
<!-- @section('title')
	About Us | Hello City
@endsection -->

@section('content')

	<p>Built with &hearts; by WOZAKA</p>

	<p><a href="/">Revenir à la page d'accueil</a></p>
@endsection
