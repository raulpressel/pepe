<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	
  <link rel="stylesheet" href="../css/app.css">
	<link rel="stylesheet" href="../css/docs.theme.min.css">
	<link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.min.css">

	<title>Inicio</title>

		
    <script src="../js/jquery.min.js"></script>
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
 				<a class="navbar-brand" href="#">SIGAB</a>
 			</div>
 	
 			<!-- Collect the nav links, forms, and other content for toggling -->
 			<!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
 				<ul class="nav navbar-nav">
					<li class="">
						<a href="{{ route('home') }}">Inicio</a></li>
					<li class="" >
						<a href="{{route ('register')}}">Registrate!</a></li>
					
 				</ul> -->
 				
 				<ul class="nav navbar-nav navbar-right">
 					
						<li class>
							<a href="/login">Login</a></li>
					
						
	 					<li class="dropdown">
	 						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
	 						<ul class="dropdown-menu">
	 							<li><a href="/logout">Cerrar sesión</a></li>
	 						</ul>
	 					</li>
					
 
 				</ul>
 			</div><!-- /.navbar-collapse -->
 		</div>
 		</nav>
	</header>
	  


    
		

		
		

		@yield('contenido')	



			

		<div class="container">		
					<center>
						<table>
							<tbody>
								<tr>
									<td align="center"><p>Facultad de Ciencia y Tecnologia - UADER</p></td>
								</tr>
								<tr>
									<td align="center"><p><a href="http://fcyt.uader.edu.ar">fcyt.uader.edu.ar</a></p></td>
								</tr>
							</tbody>
						</table>
					</center>
				
		</div>
		
		

		
    	<script src="../js/app.js"></script>

	</body>

	</html>