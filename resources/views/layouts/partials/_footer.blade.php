<footer>
		<p class="text-gray-400">&copy; Copyright {{ date('Y') }} 

			@if(! Route::is('about')) <!-- ceci va retourner true si on est sur la route home -->
				&middot; <a href="{{ route('about') }}" class="text-indigo-500 hover:text-indigo-600 underline">About Us</a>
			@endif
		</p>
</footer>