<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../css/app.css">
	<link rel="stylesheet" href="../css/docs.theme.min.css">
	<link rel="stylesheet" href="../owlcarousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="../owlcarousel/assets/owl.theme.default.min.css">

	<title>Inicio</title>

		<script src="../js/jquery.min.js"></script>
		<script src="../owlcarousel/owl.carousel.js"></script>
	
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
 			<div class="collapse navbar-collapse navbar-ex1-collapse">
 				<ul class="nav navbar-nav">
					<li class="">
						<a href="{{ route('home') }}">Inicio</a></li>
					<li class="" >
						<a href="">Saludos</a></li>
					
 				</ul>
 				
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
	  


    <section id="demos">
      <div class="row">
        <div class="large-12 columns">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>1</h4><img src="../img/drag.png">
            </div>
            <div class="item">
              <h4>2</h4><img src="../img/logo.png">
            </div>
            <div class="item"><img src="../img/responsive.png">
              <h4>3</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
            <div class="item"><img src="../img/zombie.png">
              <h4>4</h4>
            </div>
          </div>
          
          <script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoWidth:true,
                autoplay:false,
				autoplayTimeout:5000,
				autoplayHoverPause:false,
                responsive: {
                  0: {
                    items: 2,
                    nav: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 5,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
          </script>
        </div>
      </div>
    </section>

		<div class="container">

		
		<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar datos
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Olvidaste tu password?
                                </a>
                            </div>
                        </div>
                    </form>


		@yield('contenido')	



			

				
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