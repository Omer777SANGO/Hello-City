@extends('base')

<!-- 1re manière de faire -->
@section('title', 'About Us | '. config('mesvariables.name'))

<!-- 2e manière de faire --> 
<!-- @section('title')
	About Us | Hello City 
@endsection -->

@section('content')
<img src="/images/wozaka.jpg" alt="Logo WOZAKA">

	<p>Built with &hearts; by WOZAKA</p>

	<p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection
