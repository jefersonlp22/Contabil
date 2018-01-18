 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Torres Contabilidade</title>
	<link rel="icon" type="image/x-icon" src="image/icon.png">
	<link href="css/style.css" rel="stylesheet" type="text/css" >

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body id="welcome">
	<nav class="navbar navbar-default">
		<div class="container-fluid" >

			<div class="collapse navbar-collapse" id="navbar">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Inicio</a></li> 
				</ul>

				<ul class="nav navbar-nav navbar-right">
					@if(auth()->guest())
						@if(!Request::is('auth/login'))
							<li><a href="{{ url('/auth/login') }}">Login</a></li>
						@endif
						@if(!auth()->guest())
						   @if(!Request::is('auth/register'))
							 <li><a href="{{ url('/auth/register') }}">Register</a></li>
						   @endif
						@endif
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Sair</a></li>
								<li><a href="user">Novo usuário</a></li>
						 		<li><a href="{{url('/proposal')}}" >Propostas</a></li>
						 		<li><a href="{{url('/interessed')}}" >Interessados</a></li>
							</ul>
						</li>
					@endif

				</ul>
			</div>
		</div>
	</nav>
	
		<div class="banner">
			
			<img id="logo2" src="image/logo3.png">
			<img id="iconWhats" src="image/iconWhats.png">
			<img id="email" src="image/mail_icon.png">

			<foto-legend >
				<h2>Tefone, contato Contabilidade Contabil torres Samambaia norte brasilia df  </h2>
				<h4>(61) 3046-4499</h4>
				<h4>(61)9 8382-0667</h4>
				<h4>(61)9 8421-6831</h4>
				<h5><a href="mailto:torrescontabilidade1@gmail.com">torrescontabilidade1@gmail.com</a></h5></a>
			</foto-legend>

		</div> 
		
		<iframe id="banner" src="slids"></iframe>

		<nav class="menu">
			<ul id="menu" >
				<li> <a href="/">Home</a></li>
				 <li><a href="{{ url('/whoWeAre') }}">Quem Somos</a></li>
				 <li><a href="{{ url('/partners') }}">Parceiros</a></li>
	
			</ul>
		</nav>
		 <a href="{{ url('interessed/create') }}"><img id="faleConosco" src="image/fale-conosco.png"></a>

	<div class="footer">

		<img id="whatsIcon" src="image/iconWhats1.png">
		<img id="email" src="image/mail_icon.png">
		<foto-legend >
				<h2>Tefone Contabilidade torres brasilia df </h2>
				<h4>(61) 3046-4499</h4>
				<h4>(61)9 8382-0667</h4>
				<h4>(61)9 8421-6831</h4><br>
				<h5><a href="mailto:torrescontabilidade1@gmail.com">torrescontabilidade1@gmail.com</a></h5></a>
		</foto-legend>

			<foto-legend id="address" > 
				<h2> Enderço contabilidade Torres Samambaia, Brasilia, Distrito Federal DF</h2>
				<h6>QS 408 CJ.C LT.2 BL.A SALA 107
				ED Celeste Samambaia Norte
				Brasília-DF <br>
				(Atrás do Banco do Brasil)</h6>
			</foto-legend>	

		 		<iframe id="facebook" src="https://www.facebook.com/plugins/
					page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftorrescontadoresassociados%2F%3Ffref%3Dts&tabs&width=240&height=180&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="240" height="180" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">
		 		</iframe>
	</div>
@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
