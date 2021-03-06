<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">


    @if (url()->current()!='http://localhost:8000/administracion')
     @if  (url()->current()!='http://localhost:8000/administracion/inscripciones/seleccion' ) 
     @if(url()->current()!='http://localhost:8000/administracion/inscripciones/seleccion/usuario/datos_usuario/2')
     @if(url()->current()!='http://localhost:8000/administracion/becas')
    @if(url()->current()!='http://localhost:8000/administracion/menus/1/builder')
    @if(url()->current()!='http://localhost:8000/administracion/becas/create')
    @if(url()->current()!='http://localhost:8000/administracion/database')
@if(url()->current()!='http://localhost:8000/administracion/media')


    <script type="text/javascript" src="/vendor/tcg/voyager/assets/js/app.js"></script>
     <link rel="stylesheet" href="{{ voyager_asset('css/app.css') }}">
    
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/icon.css">  
    <link rel="stylesheet" href="../css/validation.css">
    <link rel="stylesheet" href="../css/prev.css">  
    <link rel="stylesheet" href="../css/thumbs.css">  
    @endif
    @endif
    @endif
    @endif
    @endif
    @endif
    @endif
    @endif



   
    <!--este rompe <link rel="stylesheet" href="../css/docs.theme.min.css">
   -->
 <link rel="shortcut icon" href="{{ voyager_asset('images/logo-icon.png') }}" type="image/x-icon">
        <title>Inicio - Sistema Integral y administrativo de gestion de Becas Fcyt </title>
    
    
   <!-- <script src="../js/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
-->
       

    
</head>
<body>
    <header class="header">
        <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->

            <div class="navbar-header">
               
                <a class="navbar-brand" href="/"><strong>SIGAB</strong></a>
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="/">Inicio</a></li>
                        @if(auth()->check())
                    <li class="" >
                        <a href="/administracion">Administracion de beca</a></li>
                       <li class="" > <a href="/datospersona/create"><strong>Postulate!</strong></a> </li>
                        @endif

                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Informacion sobre Becas</a>
                            <ul class="dropdown-menu" role="menu">
                                    <li><a href="/seleccionados_2017">Seleccion de Becados 2017</a></li>
                                    <li><a href="/requisitos" >Requisitos para la Inscripcion a la Beca</a></li>
                                    <li><a href="/formulario">Formulario para imprimir</a></li>
                            </ul>
                    </li>
                
                </ul>                    
                
                <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Registrarse</a></li>
                        @else


 <?php
$user_avatar = Voyager::image(Auth::user()->avatar);
if ((substr(Auth::user()->avatar, 0, 7) == 'http://') || (substr(Auth::user()->avatar, 0, 8) == 'https://')) {
    $user_avatar = Auth::user()->avatar;
}
?>
                         <li class="dropdown">
                                <a href="#" class="dropdown-toggle text-right" data-toggle="dropdown" role="button" aria-expanded="false">

                                 Hola {{ Auth::user()->name }} ! <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-animated" menu="menu" style=" border: gray 1px solid;">

                                    <li>
                                     <img src="{{ $user_avatar }}" width="60" height="60">
                                     <font size="2"><strong>{{ Auth::user()->name }}</strong> 
                                        {{ Auth::user()->email }}</font>   
                                    </li>
                                  <li class="divider"></li>
                                
                                <li><a href="/administracion/profile">Editar perfil</a></li>
                                <li><a href="/administracion/">Administracion de Beca</a></li>
                             
                                     <li class="divider"></li>
                                
                                  <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <button type="submit" class="btn btn-danger btn-block">
                                       Salir</button>
                                        </a>

                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                    
                                </ul>
                             

                            </li>
       
                  

                        @endguest
                    </ul>
            </div><!-- /.navbar-collapse -->
        </div>
        </nav>
    </header>
      
      
        @yield('contenido') 

        
    </body>

    </html>


