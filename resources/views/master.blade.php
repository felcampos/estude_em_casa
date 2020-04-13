<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
	<title>EstudeEmCasa</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/principal.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome-4.7.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<script src="{{asset('js/jquery-1.11.2.min.js')}}"></script>
	<script src="{{asset('css/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="https://player.vimeo.com/api/player.js"></script>
	<script src="{{asset('js/sweetalert-dev.js')}}"></script>
	<script src="{{asset('js/principal.js')}}"></script>
	@yield('header')
</head>
<body>
	<nav>
		<div class="container">
			<h3>
			<a href="/home">
				<i class="fa fa-play-circle" aria-hidden="true"></i>
				<strong>Estude</strong>Em<strong>Casa</strong>
			</a>
			</h3>

			@if (Route::has('login'))
                <div class="pull-right loginLinks">
                    @if (Auth::check())
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Sair
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                        </form>
                    @else
                        <a href="{{ url('/login') }}">Login |</a>
                        <a href="{{ url('/register') }}">Cadastro</a>
                    @endif
                </div>
            @endif

		</div>
	</nav>

	@yield('conteudoInicio')

	<div class="container conteudo">
	@yield('conteudo')
	</div> <!-- FECHA CONTAINER DO CONTEÚDO -->

	<footer>
		<p>&reg; Desenvolvido por Felipe Souza Campos como Trabalho de Conclusão de Curso / Desenvolvimento de Aplicações Web da PUC Minas - 2020</p>
	</footer>
	@include('flash');
</body>
</html>