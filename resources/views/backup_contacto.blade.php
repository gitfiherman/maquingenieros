
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--title-->
        <title>Maquingenieros | Maquinaria Ingenieros E.I.R.L.</title>

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
            body {
                background: url(plantilla/images/home/web1.jpg) no-repeat center top;
                background-attachment: fixed;
                background-size: cover;
                background-color: #66999;
                color: white;
    /*           opacity: 0.5;
                filter: alpha(opacity=50);*/
            }  
        </style>
    </head>
    <body>        
        <div class="preloader">
            <div id="loaderImage"></div>
        </div>
        <header id="navigation">
            <div class="navbar main-nav" role="banner" >
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/" >
                            <h1><img class="img-responsive" src="plantilla/images/logo.png" alt="logo"></h1>
                        </a>                    
                    </div>	
                    <div class="top-bar">	

                        <span class="contact-mail"><a href="#" onclick="return false;"><i class="fa fa-envelope-o"></i>informes@maquingenieros.com</a></span>
                        <span><i class="fa fa-phone"></i>957327305 - 942151138</span>
                        @auth<span><i class="fa fa-user"></i> {{ Auth::user()->usuario }}  </span>@endauth

                    </div>
                    <nav class="collapse navbar-collapse navbar-right">					
                        <ul class="nav navbar-nav">
                            <li><a href="/"><span>Inicio</span></a></li> 
                            <li><a href="#" onclick="return false;"><span>Nosotros</span></a></li>                        
                            <li><a href="#" onclick="return false;"><span>Cursos</span></a></li>
<!--                            <li><a href="#"><span>Alquiler</span></a></li>-->
                            <li><a href="#" onclick="return false;"><span>Eventos</span></a></li> 
                            <li><a href="#" onclick="return false;"><span>Galeria</span></a></li>						
                            <li class="active"><a href="#" onclick="return false;"><span>Contacto</span></a></li>
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
                                    <li><a href="{{ route('register') }}"><span>Registrarse</span></a></li>
                                    @endif
                                @endauth                                
                            @endif                            
                        </ul>					
                    </nav>

                </div>
            </div>
        </header> 

        <div id="contact">           
            <div class="container">
                <div class="section-title">
                    <h1>Contacto</h1>
                </div>
                <div class="row">
                    <div class="col-sm-6">                        
                        <div class="contact-form">                            
                            <form id="contact-form" class="contact-form" name="contact-form" method="POST" action="{{ route('enviarcontacto') }}">
                                @csrf
                                
                                <div class="row">
                                    <div class="form-group col-sm-12 offset-2">
                                        <label class="">Nombres</label>
                                        <input type="text" name="nombres" id="nombres" value="{{old('nombres')}}" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" required="required" placeholder="Nombres" maxlength="50">
                                        @if ($errors->has('nombres'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('nombres') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label>Apellidos</label>
                                        <input type="text" name="apellidos" id="apellidos" value="{{old('apellidos')}}" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" required="required" placeholder="Apellidos" maxlength="50">                                        
                                        @if ($errors->has('apellidos'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('apellidos') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group col-sm-12" >
                                        <label class="">Región</label>
                                        <select class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region">
                                            <option value="" selected="" disabled="">REGIÓN</option>
                                            @foreach ($regiones as $reg)
                                                <option value='{{$reg->reg_id}}'>{{$reg->reg_desc}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('region'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('region') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group col-sm-12" >
                                        <label class="">Área de Formación</label>
                                        <select class="form-control{{ $errors->has('area_form') ? ' is-invalid' : '' }}" name="area_form" id="area_form">
                                            <option value="" selected="" disabled="">Área de Formación</option>
                                            @foreach ($area_form as $af)
                                                <option value='{{$af->id}}'>{{$af->desc}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('area_form'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('area_form') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group col-sm-12" >
                                        <label class="">Área de Trabajo</label>
                                        <select class="form-control{{ $errors->has('area_trab') ? ' is-invalid' : '' }}" name="area_trab" id="area_trab">
                                            <option value="" selected="" disabled="">Área de Trabajo</option>
                                            @foreach ($area_trab as $at)
                                                <option value='{{$at->id}}'>{{$at->desc}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('area_trab'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('area_trab') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group col-sm-12" >
                                        <label class="">Industria</label>
                                        <select class="form-control{{ $errors->has('industria') ? ' is-invalid' : '' }}" name="industria" id="industria">
                                            <option value="" selected="" disabled="">Industria</option>
                                            @foreach ($industria as $industria)
                                                <option value='{{$industria->id}}'>{{$industria->desc}}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('industria'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('industria') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group col-sm-12"> 
                                        <label class="">Telefono</label>
                                        <input type="text" name="telefono" value="{{old('telefono')}}" onkeypress="return soloNumeroTab(event);" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" placeholder="Telefono" maxlength="12">
                                        @if ($errors->has('telefono'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('telefono') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="">Email</label>
                                        <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required="required" placeholder="Email" maxlength="30">                                        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <label class="">Comentarios</label>
                                        <textarea name="message" id="message" required="required" value="{{old('message')}}" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" rows="3" placeholder="Mensaje" maxlength="150" style="margin-top:2px"></textarea>
                                        @if ($errors->has('message'))
                                            <span class="invalid-feedback v_error_contact" role="alert" >
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                        @endif
                                    </div> 
                                </div>				                                   
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                                </div>
                            </form>	
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row contact-details">
                            <div class="col-sm-12">
                                <span><i class="fa fa-map-marker"></i></span>
                                <p class="v_contact" >Av.Cayma 608 ofic. 311 - CAYMA</p>
                            </div>
                            <div class="col-sm-12">
                                <span><i class="fa fa-phone"></i></span>
                                <p class="v_contact" style="font-weight:bold">957327305 - 942151138</p>
                            </div>
                            <div class="col-sm-12">
                                <span><i class="fa fa-envelope"></i></span>
                                <a class="v_contact"  href="#">informes@maquingenieros.com</a>
                            </div>
                            <div class="col-sm-12" style="margin-top:10px">
                                
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3218.7062027143106!2d-71.5486195803154!3d-16.388814405928436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b9947aa5623%3A0x43b7e42c9556d24f!2sMaquingenieros!5e0!3m2!1ses-419!2spe!4v1550612684209" frameborder="0" style="border:0" allowfullscreen></iframe>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#Contact--> 

        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.html"><img class="img-responsive" src="plantilla/images/logo.png" alt="" /></a>
                    </div>
                    <div class="col-sm-4">
                        <div class="copyright-text">
                            <p>&copy; copyright 2014 by <a href="#"> Humanity.</a> All rights reserved.</p>
                        </div>					
                    </div>
                    <div class="col-sm-4">
                        <div class="footer-socials">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
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
        <script type="text/javascript" src="plantilla/js/smoothscroll.js"></script>
        <script type="text/javascript" src="plantilla/js/jquery.nav.js"></script>
        <script type="text/javascript" src="plantilla/js/canvas.js"></script>
        <script type="text/javascript" src="plantilla/js/preloader_canvas.js"></script>
        <script type="text/javascript" src="plantilla/js/main.js"></script> 
        <script>
            var msg = '{{Session::get('alert')}}';
            var exist = '{{Session::has('alert')}}';
            if(exist){
              confirm(msg);
            }
        </script>
        <script>
//            window.oncontextmenu = function () {
//                return false;
//            };
        </script>
        <script type="text/javascript" src="archivos_js/global_function.js"></script>
    </body>
</html>
