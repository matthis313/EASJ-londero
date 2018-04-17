<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- NOINDEX = DO NOT INDEX THIS PAGE ON THE WEB, NOFOLLOW = DO NOT FOLLOW LINKS ON THIS PAGE -->
	<meta name="robots" content="noindex, nofollow">

	<!-- DESCRIPTION OF WHAT IS ON THE PAGE -->
	<meta name="description" content="the online portfolio and catalog of Londero Mosaic">

	<!-- SETS THE INITIAL ZOOM LEVEL, WHEN THE BROWSER IS LOADED -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Sets the logo img for the tab bar in the browser -->
	<link rel="icon" type="image/png" href="img/logo.png">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Londero') }}</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div id="app">
		<header>
			<div class="container text-center">
				<a class="navbar-brand" href="{{ url('/') }}">
					<h1>{{ config('app.name', 'Laravel') }}</h1>
				</a>
			</div>
		</header>
		<nav class="navbar navbar-expand-lg navbar-light navbar-transparent">
			<div class="container">
				

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<!-- Left Side Of Navbar -->
					<ul class="navbar-nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link" href="/">Forside<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/cases">Cases</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/skills">Kompetencer</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/products">Produkter</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/team">Teamet</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/contact">Kontakt</a>
						</li>

						<!-- Authentication Links -->
						{{-- @guest
							<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
							<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
						@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endguest --}}
					</ul>
				</div>
			</div>
		</nav>

		<main class="py-4">
			@yield('content')
		</main>
		<footer class="container py-5">
			<div class="row">
				<div class="col-12 col-md">
					<small class="d-block mb-3 text-muted">&copy; 1971-2018 All Rights Reserved. Londero Mosaik</small>
				</div>
				<div class="col-6 col-md">
					<h5>Features</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Cool stuff</a></li>
						<li><a class="text-muted" href="#">Random feature</a></li>
						<li><a class="text-muted" href="#">Team feature</a></li>
						<li><a class="text-muted" href="#">Stuff for developers</a></li>
						<li><a class="text-muted" href="#">Another one</a></li>
						<li><a class="text-muted" href="#">Last time</a></li>
					</ul>
				</div>
				<div class="col-6 col-md">
					<h5>Resources</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Resource</a></li>
						<li><a class="text-muted" href="#">Resource name</a></li>
						<li><a class="text-muted" href="#">Another resource</a></li>
						<li><a class="text-muted" href="#">Final resource</a></li>
					</ul>
				</div>
				<div class="col-6 col-md">
					<h5>Resources</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Business</a></li>
						<li><a class="text-muted" href="#">Education</a></li>
						<li><a class="text-muted" href="#">Government</a></li>
						<li><a class="text-muted" href="#">Gaming</a></li>
					</ul>
				</div>
				<div class="col-6 col-md">
					<h5>About</h5>
					<ul class="list-unstyled text-small">
						<li><a class="text-muted" href="#">Team</a></li>
						<li><a class="text-muted" href="#">Locations</a></li>
						<li><a class="text-muted" href="#">Privacy</a></li>
						<li><a class="text-muted" href="#">Terms</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>
