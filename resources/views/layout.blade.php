<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title') - laravel</title>
		@stack('styles')
		<link rel="stylesheet" href="{{ asset('CSS/layout.css') }}">
		<script src="https://kit.fontawesome.com/f67351aa49.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="navbar">
					<span><i class="fa-solid fa-user"></i> Hola <b>{{ auth()->user()->nombre }}</b></span>
					<span class="menu"><a href="{{route('home.index')}}"><i class="fa-solid fa-house"></i><b>Inicio</b></a></span>
					<span class="menu"><a href="{{route('conocido.index')}}"><i class="fa-solid fa-file-pen"></i><b>Conocidos</b></a></span>
					<div class="icon-container" >
						<a href="{{ route('login.destroy')  }}"><i id="salir"  class="fa-solid fa-power-off"></i></a>
					</div>
		</div>
		<div class="general-container">
			@yield('content')
		</div>
	</body>
</html>
