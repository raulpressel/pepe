<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">

  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="../css/tabs.css">	
    <link rel="stylesheet" href="../css/validation.css">
    <link rel="stylesheet" href="../css/accordion.css">
    <!-- <link rel="stylesheet" href="../css/app.css"> -->
    <link rel="stylesheet" href="../css/docs.theme.min.css">
    <link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.min.css">

	<title>Inicio</title>

	<script src="../js/ajax.js"></script>	
    <script src="../js/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="../owlcarousel/owl.carousel.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

	
</head>
<body>
	<header class="header">
		<nav class="navbar navbar-default" role="navigation">
 		<div class="container">
 			<!-- Brand and toggle get grouped for better mobile display -->

 			<div class="navbar-header">
 				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
 					<span class="sr-only">Toggle navigation</span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="/">SIGAB</a>
 			</div>
 	
 			<!-- Collect the nav links, forms, and other content for toggling -->
 			<div class="collapse navbar-collapse navbar-ex1-collapse">
 				<ul class="nav navbar-nav">
					<li class="">
						<a href="/">Inicio</a></li>
                        @if(auth()->check())
					<li class="" >
						<a href="/administracion">Administracion de beca</a></li>
                        @endif

                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Informacion sobre Becas</a>
                            <ul class="dropdown-menu" role="menu">
                                    <li><a href="/seleccionados_2017">Seleccion de Becados 2017</a></li>
                                    <li><a href="/requisitos" >Requisitos para la Inscripcion a la Beca</a></li>
                                    <li><a href="/formulario">Formulario para imprimir</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sitios de interes</a>
                            <ul class="dropdown-menu" role="menu">
                                    <li><a href="http://www.uader.com.ar">Sitio institucional Uader</a></li>
                                    <li><a href="http://fcyt.uader.edu.ar">Sede FCyT</a></li>
                                    <li><a href="/" >Nose</a></li>
                                    <li><a href="/" >Nose2</a></li>                
                            </ul>
                    </li>
                    <li class="" >
                        <a href="/contacto">Contacto</a></li>
                </ul>					 
 				
 				<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    <li><a href="/administracion/profile">Editar perfil</a></li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
 			</div><!-- /.navbar-collapse -->
 		</div>
 		</nav>
	</header>
	  
		@yield('contenido')	

		<script src="../js/app.js"></script>
	</body>

	</html>


