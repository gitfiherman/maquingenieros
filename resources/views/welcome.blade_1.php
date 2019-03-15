
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!--title-->
        <title>Maquingenieros | Maquinaria Ingenieros E.I.R.L.</title>
        <link href="{{ asset('css/estilos.css')}}" rel="stylesheet">
        <link href="{{ asset('plantilla/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('plantilla/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{ asset('plantilla/css/animate.css')}}" rel="stylesheet">	
        <link href="{{ asset('plantilla/css/prettyPhoto.css')}}" rel="stylesheet">	
        <link href="{{ asset('plantilla/css/main.css')}}" rel="stylesheet">
        <link id="css-preset" href="{{ asset('plantilla/css/presets/preset1.css')}}" rel="stylesheet">
        <link href="{{ asset('plantilla/css/responsive.css')}}" rel="stylesheet">	

        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,800,100,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>	

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
                        <a class="navbar-brand" href="index.html">
                            <h1><img class="img-responsive" src="plantilla/images/logo.png" alt="logo"></h1>
                        </a>                    
                    </div>	
                    <div class="top-bar">	
                        
                        <span class="contact-mail"><a href="#"><i class="fa fa-envelope-o"></i>informes@maquingenieros.com</a></span>
                        <span><i class="fa fa-phone"></i>957327305</span>
                        
                    </div>
                    <nav class="collapse navbar-collapse navbar-right">					
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/"><span>Inicio</span></a></li> 
                            <li><a href="#who-we-are"><span>Nosotros</span></a></li>                        
                            <li><a href="#cause-list"><span>Cursos</span></a></li>
                            <li><a href="#recent-post"><span>Alquiler</span></a></li>
                            <li><a href="#our-member"><span>Eventos</span></a></li> 
                            <li><a href="#photo-gallery"><span>Galeria</span></a></li>						
                            <li><a href="#"><span>Contacto</span></a></li>
                            @if (Route::has('login'))                                
                                @auth
                                <li class="nav-item dropdown">
                                    @if (Auth::user()->rol === "ADMINISTRADOR" || Auth::user()->rol === "EDITOR")
                                    <a href="{{ route('home') }}"><span>Home</span></a>
                                    @else
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->usuario }} <span class="caret"></span>
                                        </a>
                                    @endif
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
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

        <div id="carousel-wrapper">
            <div id="main-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#main-carousel" data-slide-to="1"></li>
                    <li data-target="#main-carousel" data-slide-to="2"></li>
                    <li data-target="#main-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active" style="background-image: url(plantilla/images/home/1.jpg)">
                        <div class="carousel-caption container">
                            <h1 class="animated rollIn v_text_fondo_home">CARGADOR FRONTAL CAT</h1>
                            <p class="animated rollIn"><b>100% PRÁCTICO CON RESPALDO DEL MTC</b></p>
                            <a href="#who-we-are" id="tohash" class="animated rollIn btn btn-primary">Empezar</a>
                            <a href="https://www.youtube.com/watch?v=XweuQqY1dDs&t=12s" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Ver Video</a>
                        </div>					
                    </div>
                    <div class="item" style="background-image: url(plantilla/images/home/2.jpg)">
                        <div class="carousel-caption container">
                            <h1 class="animated rollIn v_text_fondo_home">VOLQUETE VOLVO FMX 440/480</h1>
                            <p class="animated rollIn"><b>100% PRÁCTICO CON RESPALDO DEL MTC</b></p>
                            <a href="#who-we-are" id="tohash1" class="animated rollIn btn btn-primary">Empezar</a>
                            <a href="https://www.youtube.com/watch?v=hH8m0rgN9Z4" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Ver Video</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(plantilla/images/home/3.jpg)">
                        <div class="carousel-caption container">
                            <h1 class="animated rollIn v_text_fondo_home">CAJA EATON FULLER</h1>
                            <p class="animated rollIn"><b>100% PRÁCTICO CON RESPALDO DEL MTC</b></p>
                            <a href="#who-we-are" id="tohash2" class="animated rollIn btn btn-primary">Empezar</a>
                            <a href="https://www.youtube.com/watch?v=LCtMpOtothI&t=9s" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Ver Video</a>
                        </div>
                    </div>
                    <div class="item" style="background-image: url(plantilla/images/home/4.jpg)">
                        <div class="carousel-caption container">
                            <h1 class="animated rollIn v_text_fondo_home">MANEJO DEFENSIVO</h1>
                            <p class="animated rollIn"><b>100% PRÁCTICO CON RESPALDO DEL MTC</b></p>
                            <a href="#who-we-are" id="tohash3" class="animated rollIn btn btn-primary">Empezar</a>
                            <a href="https://www.youtube.com/watch?v=oAVtOmhQ5D4" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Ver Video</a>
                        </div>
                    </div>
                </div>	
            </div> <!--/#main-carousel--> 
        </div><!--/#carousel-wrapper--> 

        <div>
            <div class="container">
                <div class="call-to-action">
                    <div class="row">
                        <div class="col-sm-6">
                            <h1>Ven y forma parte de nuestra gran comunidad Maquingenieros</h1>
                            <p>Tenemos cursos para todos.<br>Contamos con respaldo del MTC y el Ministerio de Educación<span></span></p>					
                        </div>
                        <div class="col-sm-3">
                            <a href="#" class="pull-right btn btn-primary">Registrate</a>
                        </div>
                        <div class="col-sm-3">
                            <a href="#" class="pull-right btn btn-primary">Contactanos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="donations" class="parallax-section">
            <div class="padding-top padding-bottom container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="donations">
                            <h1>Donations</h1>
                            <p class="lead">Building Stronger Kids with Better Food</p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <a href="#" class="btn btn-primary">Donate/pay in your money</a>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="text-center overall-process">
                            <div class="cycle-image">
                                <img class="img-responsive" src="plantilla/images/cycle.png" alt="" />
                            </div>						
                            <img class="img-responsive" src="plantilla/images/cycle-line.png" alt="" />
                            <div class="round-progress">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped active six-sec-ease-in-out" role="progressbar"  data-transition="26"></div>
                                </div>
                            </div>						
                            <div class="progress-info">
                                <p>Overall Process</p>
                                <span class="lead"><i class="fa fa-thumbs-o-up"></i> Raised $ 9800</span>							
                                <span class="lead"><i class="fa fa-flag-o"></i> Goal $ 98,000</span>							
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#donations--> 

        <div id="cause-list" class="padding-bottom">
            <div class="container">	
                <div class="section-title">
                    <h1>Cause List</h1>				
                </div>
                <div id="cause-list-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#cause-list-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#cause-list-carousel" data-slide-to="1"></li>
                        <li data-target="#cause-list-carousel" data-slide-to="2"></li>
                    </ol>			
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="list-image border-one">
                                        <img class="img-responsive" src="plantilla/images/cause-list/1.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Please Help Refugees</h2>
                                        <p><span>85%</span> Donated / <span>$7,291</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                                <div class="col-sm-4">
                                    <div class="list-image border-two">
                                        <img class="img-responsive" src="plantilla/images/cause-list/2.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Children Hunger</h2>
                                        <p><span>25%</span> Donated / <span>$7,891</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                                <div class="col-sm-4">
                                    <div class="list-image border-three">
                                        <img class="img-responsive" src="plantilla/images/cause-list/3.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Domestic violence</h2>
                                        <p><span>56%</span> Donated / <span>$6,000</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="list-image border-one">
                                        <img class="img-responsive" src="plantilla/images/cause-list/1.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Please Help Refugees</h2>
                                        <p><span>85%</span> Donated / <span>$7,291</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                                <div class="col-sm-4">
                                    <div class="list-image border-two">
                                        <img class="img-responsive" src="plantilla/images/cause-list/2.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Children Hunger</h2>
                                        <p><span>25%</span> Donated / <span>$7,891</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                                <div class="col-sm-4">
                                    <div class="list-image border-three">
                                        <img class="img-responsive" src="plantilla/images/cause-list/3.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Domestic violence</h2>
                                        <p><span>56%</span> Donated / <span>$6,000</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="list-image border-one">
                                        <img class="img-responsive" src="plantilla/images/cause-list/1.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Please Help Refugees</h2>
                                        <p><span>85%</span> Donated / <span>$7,291</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                                <div class="col-sm-4">
                                    <div class="list-image border-two">
                                        <img class="img-responsive" src="plantilla/images/cause-list/2.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Children Hunger</h2>
                                        <p><span>25%</span> Donated / <span>$7,891</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                                <div class="col-sm-4">
                                    <div class="list-image border-three">
                                        <img class="img-responsive" src="plantilla/images/cause-list/3.jpg" alt="" />
                                    </div>
                                    <div class="list-info">
                                        <h2>Domestic violence</h2>
                                        <p><span>56%</span> Donated / <span>$6,000</span> To Go</p>
                                        <p>On the other hand, we denounce with righteous indignation and dislike.</p>
                                        <a href="#" class="btn btn-primary">Donate Now</a>
                                    </div>								
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#cause-list--> 

        <div id="video-section" class="parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>How Can You Help!</h1>
                        <p class="lead">Help for cause</p>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#video" class="btn btn-primary" role="tab" data-toggle="tab">Watch Video</a></li>
                            <li><a href="#mobilization" class="btn btn-primary" role="tab" data-toggle="tab">Mobilization</a></li>
                            <li><a href="#support" class="btn btn-primary" role="tab" data-toggle="tab">Support</a></li>
                        </ul>					
                        <p>Aenean nonummy hendrerit mris. Phasellus porta. Fusce suscipit varius. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui.</p>
                    </div>
                    <div class="col-sm-6">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="video">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/29805267"></iframe>						
                                </div>
                            </div>
                            <div class="tab-pane fade" id="mobilization">
                                <img class="img-responsive" src="plantilla/images/mobilization.jpg" alt="" />
                            </div>
                            <div class="tab-pane fade" id="support">
                                <h1>How we support for refugees</h1>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Phasellus porta</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Fusce suscipit varius.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Cum sociis natoque penatibus</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Nascetur ridiculus mus.</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Typi non habent claritatem</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Mirum est notare quam</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i> Eodem modo typi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 

        <div id="recent-post" class="padding-bottom padding-top-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="section-title event-title">
                            <h1>Events</h1>
                        </div>
                        <div id="event-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#event-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#event-carousel" data-slide-to="1"></li>
                                <li data-target="#event-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Aug <span>01</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>Empowerment & Leadership</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>25</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>Our Children Matter</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>21</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>A Standard Post Format &  Solve it</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>17</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">12:00 am - 5:00 pm</p>
                                            <p>Care for Children</p>
                                        </div>
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Aug <span>01</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>Empowerment & Leadership</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>27</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>Our Children Matter</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>24</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>A Standard Post Format &  Solve it</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>13</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">12:00 am - 5:00 pm</p>
                                            <p>Care for Children</p>
                                        </div>
                                    </a>
                                </div><!--/.item-->
                                <div class="item">
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Aug <span>16</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>Empowerment & Leadership</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>25</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>Our Children Matter</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>15</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">10:00 am - 12:00 am</p>
                                            <p>A Standard Post Format &  Solve it</p>
                                        </div>
                                    </a>
                                    <a href="#" class="single-event">
                                        <div class="pull-left event-date">
                                            <p>Jul <span>17</span></p>									
                                        </div>
                                        <div class="event-info">
                                            <p class="event-time">12:00 am - 5:00 pm</p>
                                            <p class="event-details">Care for Children</p>
                                        </div>
                                    </a>
                                </div><!--/.item-->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-9">
                        <div class="section-title">
                            <h1>Most Recent Post</h1>
                        </div>					
                        <div id="recent-post-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#recent-post-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#recent-post-carousel" data-slide-to="1"></li>
                                <li data-target="#recent-post-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post1.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post2.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post3.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post4.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item--> 
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post3.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post1.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post4.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post2.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item--> 
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post4.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post1.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post3.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="single-post">
                                                <div class="pull-left post-image">
                                                    <a href="#">
                                                        <img class="img-responsive" src="plantilla/images/recent-post/post2.jpg" alt="" />
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                                <div class="pull-right post-details">
                                                    <p class="post-date">03 Dec 2014</p>
                                                    <a href="#"><h5>Donec luctus imperdiet</h5></a>
                                                    <span>John doe</span>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item--> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#recent-post--> 

        <div id="our-member" class="padding-top-two padding-bottom-two">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="section-title">
                            <h1>Our Member</h1>
                        </div>
                        <div id="member-carousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#member-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#member-carousel" data-slide-to="1"></li>
                                <li data-target="#member-carousel" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member1.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member2.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member3.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member1.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member4.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member5.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member6.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member7.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member1.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member2.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member3.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member4.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member4.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member6.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member7.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member1.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member1.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member7.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member2.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member3.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member4.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member5.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member6.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4 col-md-3">
                                            <div class="single-member">
                                                <div class="member-image">
                                                    <img class="img-responsive" src="plantilla/images/member/member1.jpg" alt="" />
                                                    <div class="member-info">
                                                        <p class="lead">Jim Tobalt</p>
                                                        <p>Campaign Coordinator</p>
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!--/.item -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="become-volunteer">
                            <img class="img-responsive" src="plantilla/images/logo-icon.png" alt="" />
                            <h1><span>Become a</span>Volunteer</h1>
                            <p>This last point is important because there are some who advocate for democracy only when they are out of power.</p>
                            <a href="#" class="btn btn-default">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#our-member--> 

        <div id="photo-gallery" class="padding-bottom-two">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/1.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/2.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/3.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/4.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/5.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/6.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/7.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/8.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/9.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/10.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/11.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-2">
                        <div class="single-photo">
                            <div class="gallery-content">
                                <img class="img-responsive" src="plantilla/images/gallery/12.jpg" alt="" />
                                <div class="photo-info">							
                                    <a href="images/gallery/full/1.jpg" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                                    <h4>Education For Child</h4>
                                    <span>Wasim Ahmed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#Photo-Gallery--> 

        <div id="our-partner" class="padding-bottom">
            <div class="container">
                <div class="section-title">
                    <h1>Our Member</h1>
                </div>
                <div id="partner-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#partner-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#partner-carousel" data-slide-to="1"></li>
                        <li data-target="#partner-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/1.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/2.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/3.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/4.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/5.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/6.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/1.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/2.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/3.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/4.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/5.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/6.png" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/1.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/2.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/3.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/4.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/5.png" alt="" />
                                </div>
                                <div class="col-sm-2">
                                    <img class="img-responsive" src="plantilla/images/partner/6.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#our-partner--> 

        <div id="word-for-humanity" class="padding-top parallax-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <h1>Some Words For Humanity</h1>
                        <div id="humanity-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="img-responsive img-circle" src="plantilla/images/partner/partner1.png" alt="" />
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                    <p class="word-author">Catherine Grace - America</p>
                                </div>
                                <div class="item">
                                    <img class="img-responsive img-circle" src="plantilla/images/partner/partner2.png" alt="" />
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                    <p class="word-author">Catherine Grace - America</p>
                                </div>
                                <div class="item">
                                    <img class="img-responsive img-circle" src="plantilla/images/partner/partner3.png" alt="" />
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                                    <p class="word-author">Catherine Grace - America</p>
                                </div>
                            </div>
                            <ol class="carousel-indicators">
                                <li data-target="#humanity-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#humanity-carousel" data-slide-to="1"></li>
                                <li data-target="#humanity-carousel" data-slide-to="2"></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#word-for-humanity-->
        
        <div id="who-we-are">
            <div class="container">
                <div class="call-to-action">
                    <div class="row">
                        <div class="col-sm-9">
                            <h1>Ven y forma parte de la gran comunidad Maquingenieros</h1>
                            <p>Proin gravida nibh vel velit auctor aliquet donate so far: <span>$30,00,000</span></p>					
                        </div>
                        <div class="col-sm-3">
                            <a href="#" class="pull-right btn btn-primary">Donate Now</a>
                        </div>
                    </div>
                </div><!--/.call to action-->
                <div class="text-center who-we-are padding-bottom padding-top">
                    <div class="row">
                        <div class="col-sm-4">
                            <img class="img-responsive" src="plantilla/images/about/1.png" alt="" />
                            <h2>Our World</h2>
                            <p class="lead">We are in 32 Countries</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="plantilla/images/about/2.png" alt="" />
                            <h2>Our Promise</h2>
                            <p class="lead">59% Of all $ goes to Programs</p>
                        </div>
                        <div class="col-sm-4">
                            <img class="img-responsive" src="plantilla/images/about/3.png" alt="" />
                            <h2>Our Reach</h2>
                            <p class="lead">1198 Million Member</p>
                        </div>					
                    </div>
                </div>
                <div class="our-details-tab padding-bottom">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div id="about-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img class="img-responsive" src="plantilla/images/about/p1.jpg" alt="" />
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="plantilla/images/about/p2.jpg" alt="" />
                                    </div>
                                    <div class="item">
                                        <img class="img-responsive" src="plantilla/images/about/p3.jpg" alt="" />
                                    </div>
                                </div>
                            </div><!--/#about-carousel--> 
                        </div>
                        <div class="col-sm-12 col-md-6 tab-section">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="active"><a href="#story" role="tab" data-toggle="tab">Our Story</a></li>
                                <li><a href="#mission" role="tab" data-toggle="tab">Mission</a></li>
                                <li><a href="#activity" role="tab" data-toggle="tab">Our Activity</a></li>
                                <li><a href="#faq" role="tab" data-toggle="tab">FAQ</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="story">
                                    <h4>Give the Life-changing Gift of Education in Citytown.</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth,</p>
                                </div>
                                <div class="tab-pane fade " id="mission">								
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                                <div class="tab-pane fade " id="activity">								
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> <p>I throw myself down among the tall grass by the trickling stream; and, as I lie close to the earth,</p>
                                </div>
                                <div class="tab-pane fade " id="faq">
                                    <h4>Frequently asked questions -</h4>
                                    <ul>
                                        <li>Q: Lorem Ipsum is simply dummy text ?</li>
                                        <li>Ans: Lorem Ipsum is simply dummy text of the printing</li>
                                        <li>Q: When an unknown printer took ?</li>
                                        <li>Ans: Lorem Ipsum is simply dummy text of the printing and typesetting.</li>
                                        <li>Q: I lie close to the earth ?</li>									
                                        <li>Ans: Lorem Ipsum is simply dummy text. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/#who-we-are--> 

<!--        <div id="contact">
            <div class="container">
                <div class="section-title">
                    <h1>Contact Us</h1>
                </div>
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="row contact-details">
                            <div class="col-sm-4">
                                <span><i class="fa fa-map-marker"></i></span>
                                <p class="contact-info">1234 Street Name, City Name</p>
                            </div>
                            <div class="col-sm-4">
                                <span><i class="fa fa-phone"></i></span>
                                <p class="contact-info">+(123) 456-7890 </p>
                            </div>
                            <div class="col-sm-4">
                                <span><i class="fa fa-envelope"></i></span>
                                <a class="contact-info" href="#">contact@humanity.com</a>
                            </div>
                        </div>
                        <div class="contact-form">
                            <form id="contact-form" class="contact-form" name="contact-form" method="post" action="send-mail.php">
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                                        <input type="text" name="company" class="form-control" placeholder="Company">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="email" name="email" class="form-control" required="required" placeholder="Email Address">
                                        <input type="email" name="website" class="form-control" required="required" placeholder="Website">
                                    </div>
                                    <div class="form-group col-sm-12">
                                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
                                    </div> 
                                </div>				                                   
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Send Your Message</button>
                                </div>
                            </form>	
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

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
    </body>
</html>