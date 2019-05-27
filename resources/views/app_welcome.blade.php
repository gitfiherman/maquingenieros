
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--title-->
        <title>Maquingenieros | Maquinaria Ingenieros E.I.R.L.</title>
        
        <link href="{{ asset('css/jquery-confirm.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
              
        <link href="{{ asset('plantilla/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('plantilla/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('plantilla/css/animate.css')}}" rel="stylesheet">	
        <link href="{{ asset('plantilla/css/prettyPhoto.css')}}" rel="stylesheet">	
        <link href="{{ asset('plantilla/css/main.css')}}" rel="stylesheet">
        <link id="css-preset" href="{{ asset('plantilla/css/presets/preset1.css')}}" rel="stylesheet">
        <link href="{{ asset('plantilla/css/responsive.css')}}" rel="stylesheet">
        <link href="{{ asset('css/estilos.css')}}" rel="stylesheet">

        <!--Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>	
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

        <link rel="shortcut icon" href="plantilla/favicon_2.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="plantilla/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="plantilla/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="plantilla/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="plantilla/images/ico/apple-touch-icon-57-precomposed.png">
        <style type="text/css">
            
        </style>
    </head>
    <body>        
        <div class="preloader">
            <div id="loaderImage"></div>
        </div>
        <header id="navigation">
            <div class="navbar main-nav" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">
                            <h1><img class="img-responsive" src="plantilla/images/logo.png" alt="logo"></h1>
                        </a>                    
                    </div>	
                    <div class="top-bar">	
                        <span><i class="fa fa-phone"></i>AREQUIPA - PERU</span>
                        <span class="contact-mail"><a href="#" onclick="return false;"><i class="fa fa-envelope-o"></i>informes@maquingenieros.com</a></span>
                        <span><i class="fa fa-phone"></i>957327305 - 976429155</span>
                        @auth<span><i class="fa fa-user"></i> {{ Auth::user()->usuario }}  </span>@endauth
                        
                    </div>
                    <nav class="collapse navbar-collapse navbar-right">					
                        <ul class="nav navbar-nav">
                            <li id="menu_principal_inicio"><a href="/"><span>Inicio</span></a></li> 
                            <li id="menu_principal_nosotros"><a href="nosotros"><span>Nosotros</span></a></li>                        
                            <li id="menu_principal_cursos"><a href="cursos"><span>Cursos</span></a></li>
<!--                            <li id="menu_principal_eventos"><a href="#" onclick="return false;"><span>Eventos</span></a></li> 
                            <li id="menu_principal_galeria"><a href="#" onclick="return false;"><span>Galeria</span></a></li>						-->
                            <li id="menu_principal_contacto"><a href="{{route('contacto')}}"><span>Contacto</span></a></li>
                            @if (Route::has('login'))                                
                                @auth
                                <li class="nav-item dropdown">
                                    @if (Auth::user()->rol === "ADMINISTRADOR" || Auth::user()->rol === "EDITOR")                                    
                                        <a href="{{ route('home') }}"><span>Home</span></a>                                    
                                    @else                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>                                       
                                    @endif
                                </li>
                                @else
                                    <li><a href="{{ route('login') }}"><span>Iniciar Session</span></a></li>
                                    @if (Route::has('register'))
                                        <!--<li><a href="{{ route('register') }}"><span>Registrarse</span></a></li>-->
                                    @endif
                                @endauth                                
                            @endif                            
                        </ul>					
                    </nav>
                </div>
            </div>
        </header> 

        @yield('content_webb')
        <div id="alertdialog" style="display: none;" ></div>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.html"><img class="img-responsive" src="plantilla/images/logo.png" alt="" /></a>
                    </div>
                    <div class="col-sm-4">
                        <div class="copyright-text">
                            <p>&copy; copyright 2019 <a href="#" onclick="return false;"> WebSystem </a>| Derechos Reservados.</p>
                        </div>					
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-socials">
                            <ul>
                                <li><a target="_blank" href="https://www.facebook.com/maquingenieros/"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ"><i class="fa fa-youtube"></i></a></li>
                                <li><a target="_blank" href="https://twitter.com/maquingenieros"><i class="fa fa-twitter"></i></a></li>
                                <li><a target="_blank" href="https://vimeo.com/maquingenieros"><i class="fa fa-vimeo"></i></a></li>                                
                                <li><a target="_blank" href="https://www.instagram.com/maquingenieros/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer><!--/#footer--> 

        <!--/Preset Style Chooser--> 
        

        <!--/#scripts--> 
        <script type="text/javascript" src="plantilla/js/jquery.js"></script>
        <script type="text/javascript" src="plantilla/js/bootstrap.min.js"></script>	
        <script type="text/javascript" src="plantilla/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="plantilla/js/jquery.parallax.js"></script>
        <!--<script type="text/javascript" src="plantilla/js/smoothscroll.js"></script>-->
        <script type="text/javascript" src="plantilla/js/jquery.nav.js"></script>
        <script type="text/javascript" src="plantilla/js/canvas.js"></script>
        <script type="text/javascript" src="plantilla/js/preloader_canvas.js"></script>
        <script type="text/javascript" src="plantilla/js/main.js"></script> 
        
        <script src="{{ asset('js/libs/jquery-2.1.1.min.js') }}"></script>
       
      

        <script src="{{ asset('archivos_js/global_function.js') }}"></script>

        <script src="{{ asset('js/app.config.js') }}"></script>
        <script src="{{ asset('js/app.min.js') }}"></script>
        <script src="{{ asset('js/block_ui.js') }}"></script>        
        



        <script src="{{ asset('js/plugin/masked-input/jquery.maskedinput.min.js') }}"></script>

        <script src="{{ asset('js/notification/SmartNotification.min.js')}}"></script>
        
        <script src="{{ asset('js/jquery-confirm.js')}}"></script>
        <script src="{{ asset('archivos_js/configuracion.js') }}"></script>  
        
       <!--<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>--> 
<!--        <script src="{{ asset('js/pdf/jspdf.debug.js') }}"></script>
        <script src="{{ asset('js/pdf/html2pdf.js') }}"></script>-->
              
  <!--<script src="{{ asset('js/libs/jquery-ui-1.10.3.min.js') }}"></script>-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>-->
        <!--        <script src="{{ asset('js/plugin/jqgrid/jquery.jqGrid.min.js') }}"></script>
        <script src="{{ asset('js/plugin/jqgrid/grid.locale-en.min.js') }}"></script>-->
        <script>
            window.oncontextmenu = function() {
                return false;
            } 
        </script>
        @yield('page-js-script-web')
    </body>
</html>