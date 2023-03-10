<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{{csrf_token()}}}">
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<title>{{config('app.name', 'Mapa Faculdades')}}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
</head>
<body>
	<div id="c-principal" class="container">
		<nav class="navbar navbar-expand-lg">
			<div class="container-fluid">
				<a class="navbar-brand" href="{{route('inicial')}}" style="color: white;">
					{{config('app.name', 'Mapa Faculdades')}}
				</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{__('Toggle navigation')}}">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto">

					</ul>
					<ul class="navbar-nav ms-auto">
						<li class="navbar-item">
							<a class="nav-link active" aria-current="page" href="{{route('inicial')}}">Home</a>
						</li>
						@guest
							@if(Route::has('login'))
							<li class="navbar-item">
								<a class="nav-link" href="{{route('login')}}">{{__('Login')}}</a>
							</li>
							@endif

							@if(Route::has('register'))
							<li class="navbar-item">
								<a class="nav-link" href="{{route('register')}}">{{__('Register')}}</a>
							</li>
							@endif
						@else
						<li class="navbar-item dropdown">
							<a id="navbarDropdown" class="navlink dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{Auth::user()->name}}
							</a>
							<div class="dropdown-menu dropdown-menu-end" aria-labeledby="navbarDropdown">
								<a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{__('Logout')}}
								</a>
								<form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
								@csrf
								</form>
							</div>
						</li>
						@endguest
					</ul>
				</div>
			</div>
		</nav>
	</div>
	<main class="py-4">
		@yield('conteudo')
	</main>
</body>
</html>