@extends('app_welcome')

@section('content_webb')
<div>
    <div id="main-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#main-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#main-carousel" data-slide-to="1"></li>
            <li data-target="#main-carousel" data-slide-to="2"></li>
            <li data-target="#main-carousel" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active" style="background-image: url(plantilla/images/home/1.webp)">
                <div class="carousel-caption container">
                    <h1 class="animated rollIn v_text_fondo_home">CARGADOR FRONTAL CAT</h1>
                    <p class="animated rollIn"><b>100% PRÁCTICO CON RESPALDO DEL MTC</b></p>
                    <a href="{{route('contacto')}}" id="tohash" class="animated rollIn btn btn-primary">Contacto</a>
                    <a href="https://www.youtube.com/watch?v=XweuQqY1dDs&t=12s" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Ver Video</a>
                </div>					
            </div>
            <div class="item" style="background-image: url(plantilla/images/home/2.jpg)">
                <div class="carousel-caption container">
                    <h1 class="animated rollIn v_text_fondo_home">VOLQUETE VOLVO FMX 440/480</h1>
                    <p class="animated rollIn"><b>100% PRÁCTICO CON RESPALDO DEL MTC</b></p>
                    <a href="{{route('contacto')}}" id="tohash1" class="animated rollIn btn btn-primary">Contacto</a>
                    <a href="https://www.youtube.com/watch?v=hH8m0rgN9Z4" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Ver Video</a>
                </div>
            </div>
            <div class="item" style="background-image: url(plantilla/images/home/3.webp)">
                <div class="carousel-caption container">
                    <h1 class="animated rollIn v_text_fondo_home">CAJA EATON FULLER</h1>
                    <p class="animated rollIn"><b>100% PRÁCTICO CON RESPALDO DEL MTC</b></p>
                    <a href="{{route('contacto')}}" id="tohash2" class="animated rollIn btn btn-primary">Contacto</a>
                    <a href="https://www.youtube.com/watch?v=LCtMpOtothI&t=9s" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Ver Video</a>
                </div>
            </div>
            <div class="item" style="background-image: url(plantilla/images/home/4.webp)">
                <div class="carousel-caption container">
                    <h1 class="animated rollIn v_text_fondo_home">MANEJO DEFENSIVO 4x4</h1>
                    <p class="animated rollIn"><b>100% PRÁCTICO CON RESPALDO DEL MTC</b></p>
                    <a href="{{route('contacto')}}" id="tohash3" class="animated rollIn btn btn-primary">Contacto</a>
                    <a href="https://www.youtube.com/watch?v=7NISDqIpOuU&t=1s" data-gallery="prettyPhoto" class="watch-video"><i class="fa fa-play"></i> Ver Video</a>
                </div>
            </div>
        </div>	
    </div> <!--/#main-carousel--> 
</div><!--/sLAYDER--> 

<div>
    <div class="container">
        <div class="call-to-action">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Sé un Operador profesional, Ven y forma parte de nuestra gran comunidad Maquingenieros</h1>
                    <p>Tenemos cursos para todos.<br>Contamos con respaldo del MTC y el Ministerio de Educación<span></span></p>					
                </div>
                <div class="col-sm-3">
                    <a href="{{ route('register') }}" class="pull-right btn btn-primary" title="Resive Notificaciones en tu email">Registrate</a>
                </div>
                <div class="col-sm-3">
                    <a href="{{route('contacto')}}" class="pull-right btn btn-primary" title="solicita ">Contactanos</a>
                </div>
            </div>
        </div>
    </div>
</div> 

<div  id="donations"  class="parallax-section">
    <div class="padding-top padding-bottom container">
        <div class="row">
            <div class="col-sm-5">
                <div class="donations v_text_fondo_home">
                    <h1>¿POR QUÉ ELEGIR MAQUINGENIEROS?</h1>
                    <hr>
                    <p>Somos un centro de Capacitación y Actualización en Operación de Maquinaria Pesada y Tracto Camiones. Contamos con Instructores profesionales del sector, que han
                    dedicado años de experiencia en mineria, nuestra especialidad.<br>
                    Nuestro compromiso es formar a nuestros participantes como futuros operadores calificados en el sector Minero, Industria y construcción.</p>                            
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
                        <p>SEGUIMOS AVANZANDO Y LO HACEMOS CONTIGO</p>
                        <span class="lead"><i class="fa fa-thumbs-o-up"></i> Likes 5200 +</span>
                        <span class="lead"><i class="fa fa-file"></i> Cursos 14 +</span>
                        <span class="lead"><i class="fa fa-user"></i> Capacitados 275 </span>							
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#donations--> 

<div id="cause-list" class="padding-bottom">
    <div class="container">	
        <div class="section-title">
            <h1>CURSOS GENERALES</h1>				
        </div>
        <div id="cause-list-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#cause-list-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#cause-list-carousel" data-slide-to="1"></li>                        
            </ol>			
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="list-image border-one">
                                <img class="img-responsive" src="plantilla/images/cause-list/1.webp" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Volquete Volvo FMX 440</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="#" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="list-image border-two">
                                <img class="img-responsive" src="plantilla/images/cause-list/2.webp" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Cargador Fronta Cat 966H</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="#" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="list-image border-three">
                                <img class="img-responsive" src="plantilla/images/cause-list/3.webp" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>CAJA FULLER</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="#" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="list-image border-one">
                                <img class="img-responsive" src="plantilla/images/cause-list/4.webp" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Manejo Defensivo 4x4</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="#" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="list-image border-two">
                                <img class="img-responsive" src="plantilla/images/cause-list/5.webp" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Excavadora Hidraulica</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="#" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="list-image border-three">
                                <img class="img-responsive" src="plantilla/images/cause-list/6.webp" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Retroexcavadora CAT</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="#" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                    </div>
                </div>                    
            </div>
        </div>
    </div>
</div><!--/#cursos--> 

<div id="video-section" class="parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 v_text_fondo_home">
                <h1>ESCUELA DE OPERADORES</h1>
                <p class="lead">DESARROLLAMOS TU CAPACIDAD Y ORIENTAMOS TU TALENTO EN EL CAMPO INDUSTRIAL Y MINERO</p>
                <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#video" class="btn btn-primary" role="tab" data-toggle="tab">Ver Video</a></li>
                        <li><a href="#mobilization" class="btn btn-primary" role="tab" data-toggle="tab">Participantes</a></li>                                
                </ul>			
                <p>Maquingenieros brinda capacitaciones y cursos referidos a la Operacion de Maquinaria Pesada y Tracto camión para el rubro Industrial y Minero, con métodos innovadores y fomentando el trabajo en equipo.</p>
            </div>
            <div class="col-sm-6">                        
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="video">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/315980091"></iframe>						
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mobilization">
                        <img class="img-responsive" src="plantilla/images/mobilization.jpg" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!--/#Video Vimeo-->

<div id="recent-post" class="padding-bottom padding-top-two">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="section-title event-title">
                    <h1>Eventos</h1>
                </div>
                <div id="event-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#event-carousel" data-slide-to="0" class="active"></li>                                
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <a href="#" class="single-event">
                                <div class="pull-left event-date">
                                    <p>MAR <span>10</span></p>									
                                </div>
                                <div class="event-info">
                                    <p class="event-time">06:00 am - 06:00 pm</p>
                                    <p>Cargador Frontal Cat 966H</p>
                                </div>
                            </a>
                            <a href="#" class="single-event">
                                <div class="pull-left event-date">
                                    <p>MAR <span>17</span></p>									
                                </div>
                                <div class="event-info">
                                    <p class="event-time">06:00 am - 06:00 pm</p>
                                    <p>CAJA FULLER</p>
                                </div>
                            </a>
                            <a href="#" class="single-event">
                                <div class="pull-left event-date">
                                    <p>MAR <span>17</span></p>									
                                </div>
                                <div class="event-info">
                                    <p class="event-time">06:00 am - 06:00 pm</p>
                                    <p>Volquete Volvo FMX 440</p>
                                </div>
                            </a>
                            <a href="#" class="single-event">
                                <div class="pull-left event-date">
                                    <p>MAR <span>17</span></p>									
                                </div>
                                <div class="event-info">
                                    <p class="event-time">06:00 am - 06:00 pm</p>
                                    <p>Manejo Defensivo 4x4</p>
                                </div>
                            </a>
                        </div><!--/.item-->                                
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-9">
                <div class="section-title">
                    <h1>Cronograma de Eventos</h1>
                </div>					
                <div id="recent-post-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#recent-post-carousel" data-slide-to="0" class="active"></li>                                
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-post">
                                        <div class="pull-left post-image">
                                            <a href="#" onclick="return false;">
                                                <img class="img-responsive" src="plantilla/images/recent-post/post1.jpg" alt="" />
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="pull-right post-details">
                                            <p class="post-date">10 marzo 2019</p>
                                            <a href="#" onclick="return false;"><h5>Cargador Frontal</h5></a>
                                            <span>CAT 966H</span>
                                            <p>100% práctico en condiciones reales.<br>Operación tipo Mina y Bolsa de trabajo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-post">
                                        <div class="pull-left post-image">
                                            <a href="#" onclick="return false;">
                                                <img class="img-responsive" src="plantilla/images/recent-post/post2.jpg" alt="" />
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="pull-right post-details">
                                            <p class="post-date">03 marzo 2019</p>
                                            <a href="#" onclick="return false;"><h5>Volquete Volvo</h5></a>
                                            <span>FMX 440</span>
                                            <p>100% práctico en condiciones reales.<br>Operación tipo Mina y Bolsa de trabajo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-post">
                                        <div class="pull-left post-image">
                                            <a href="#" onclick="return false;">
                                                <img class="img-responsive" src="plantilla/images/recent-post/post3.jpg" alt="" />
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="pull-right post-details">
                                            <p class="post-date">03 marzo 2019</p>
                                            <a href="#" onclick="return false;"><h5>Caja Eaton Fuller</h5></a>
                                            <span>International 18 velocidades</span>
                                            <p>100% práctico en condiciones reales.<br>Operación tipo Mina y Bolsa de trabajo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-post">
                                        <div class="pull-left post-image">
                                            <a href="#" onclick="return false;">
                                                <img class="img-responsive" src="plantilla/images/recent-post/post4.jpg" alt="" />
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                        </div>
                                        <div class="pull-right post-details">
                                            <p class="post-date">03 marzo 2019</p>
                                            <a href="#" onclick="return false;"><h5>Manejo Defensivo</h5></a>
                                            <span>Camioneta 4x4</span>
                                            <p>100% práctico en condiciones reales.<br>Operación tipo Mina y Bolsa de trabajo.</p>
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
</div><!--/#Eventos--> 

<div id="our-member" class="padding-top-two padding-bottom-two">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="section-title">
                    <h1>RESPONSABILIDAD SOCIAL</h1>
                </div>
                <div id="member-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#member-carousel" data-slide-to="0" class="active"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4 col-md-3">
                                    <div class="single-member">
                                        <div class="member-image">
                                            <img class="img-responsive" src="plantilla/images/member/member1.webp" alt="" />
                                            <div class="member-info">
                                                <p class="lead">Mollendo</p>
                                                <p>Campaña limpieza - Playa</p>
                                                <ul>
                                                    <li><a target="_blank" href="https://www.facebook.com/maquingenieros/" title="Visita nuestra pagina de Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ" title="Visita nuestro canal de Youtube"><i class="fa fa-youtube"></i></a></li>                                                            
                                                    <li><a target="_blank" href="https://www.instagram.com/maquingenieros/" title="Mira nuestras fotos y videos en Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/maquingenieros" title="Vsita nuestra pagina de Twitter"><i class="fa fa-twitter"></i></a></li>                                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="single-member">
                                        <div class="member-image">
                                            <img class="img-responsive" src="plantilla/images/member/member2.webp" alt="" />
                                            <div class="member-info">
                                                <p class="lead">Camana</p>
                                                <p>Campaña limpieza - Playa</p>
                                                <ul>
                                                    <li><a target="_blank" href="https://www.facebook.com/maquingenieros/" title="Visita nuestra pagina de Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ" title="Visita nuestro canal de Youtube"><i class="fa fa-youtube"></i></a></li>                                                            
                                                    <li><a target="_blank" href="https://www.instagram.com/maquingenieros/" title="Mira nuestras fotos y videos en Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/maquingenieros" title="Vsita nuestra pagina de Twitter"><i class="fa fa-twitter"></i></a></li>                                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="single-member">
                                        <div class="member-image">
                                            <img class="img-responsive" src="plantilla/images/member/member3.webp" alt="" />
                                            <div class="member-info">
                                                <p class="lead">Mollendo</p>
                                                <p>Campaña limpieza - Playa</p>
                                                <ul>
                                                    <li><a target="_blank" href="https://www.facebook.com/maquingenieros/" title="Visita nuestra pagina de Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ" title="Visita nuestro canal de Youtube"><i class="fa fa-youtube"></i></a></li>                                                            
                                                    <li><a target="_blank" href="https://www.instagram.com/maquingenieros/" title="Mira nuestras fotos y videos en Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/maquingenieros" title="Vsita nuestra pagina de Twitter"><i class="fa fa-twitter"></i></a></li>                                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="single-member">
                                        <div class="member-image">
                                            <img class="img-responsive" src="plantilla/images/member/member8.webp" alt="" />
                                            <div class="member-info">
                                                <p class="lead">Camana</p>
                                                <p>Campaña limpieza - Playa</p>
                                                <ul>
                                                    <li><a target="_blank" href="https://www.facebook.com/maquingenieros/" title="Visita nuestra pagina de Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ" title="Visita nuestro canal de Youtube"><i class="fa fa-youtube"></i></a></li>                                                            
                                                    <li><a target="_blank" href="https://www.instagram.com/maquingenieros/" title="Mira nuestras fotos y videos en Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/maquingenieros" title="Vsita nuestra pagina de Twitter"><i class="fa fa-twitter"></i></a></li>                                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="single-member">
                                        <div class="member-image">
                                            <img class="img-responsive" src="plantilla/images/member/member4.webp" alt="" />
                                            <div class="member-info">
                                                <p class="lead">Camana</p>
                                                <p>Campaña limpieza - Playa</p>
                                                <ul>
                                                    <li><a target="_blank" href="https://www.facebook.com/maquingenieros/" title="Visita nuestra pagina de Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ" title="Visita nuestro canal de Youtube"><i class="fa fa-youtube"></i></a></li>                                                            
                                                    <li><a target="_blank" href="https://www.instagram.com/maquingenieros/" title="Mira nuestras fotos y videos en Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/maquingenieros" title="Vsita nuestra pagina de Twitter"><i class="fa fa-twitter"></i></a></li>                                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="single-member">
                                        <div class="member-image">
                                            <img class="img-responsive" src="plantilla/images/member/member5.webp" alt="" />
                                            <div class="member-info">
                                                <p class="lead">Camana</p>
                                                <p>Campaña limpieza - Playa</p>
                                                <ul>
                                                    <li><a target="_blank" href="https://www.facebook.com/maquingenieros/" title="Visita nuestra pagina de Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ" title="Visita nuestro canal de Youtube"><i class="fa fa-youtube"></i></a></li>                                                            
                                                    <li><a target="_blank" href="https://www.instagram.com/maquingenieros/" title="Mira nuestras fotos y videos en Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/maquingenieros" title="Vsita nuestra pagina de Twitter"><i class="fa fa-twitter"></i></a></li>                                                            
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-md-3">
                                    <div class="single-member">
                                        <div class="member-image">
                                            <img class="img-responsive" src="plantilla/images/member/member6.webp" alt="" />
                                            <div class="member-info">
                                                <p class="lead">Camana</p>
                                                <p>Campaña limpieza - Playa</p>
                                                <ul>
                                                    <li><a target="_blank" href="https://www.facebook.com/maquingenieros/" title="Visita nuestra pagina de Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ" title="Visita nuestro canal de Youtube"><i class="fa fa-youtube"></i></a></li>                                                            
                                                    <li><a target="_blank" href="https://www.instagram.com/maquingenieros/" title="Mira nuestras fotos y videos en Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/maquingenieros" title="Vsita nuestra pagina de Twitter"><i class="fa fa-twitter"></i></a></li>                                                            
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
                                                <p class="lead">Mollendo</p>
                                                <p>Campaña limpieza - Playa</p>
                                                <ul>
                                                    <li><a target="_blank" href="https://www.facebook.com/maquingenieros/" title="Visita nuestra pagina de Facebook"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a target="_blank" href="https://www.youtube.com/channel/UCgwHQsVUzQTwsNc4WcqmCtQ" title="Visita nuestro canal de Youtube"><i class="fa fa-youtube"></i></a></li>                                                            
                                                    <li><a target="_blank" href="https://www.instagram.com/maquingenieros/" title="Mira nuestras fotos y videos en Instagram"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a target="_blank" href="https://twitter.com/maquingenieros" title="Vsita nuestra pagina de Twitter"><i class="fa fa-twitter"></i></a></li>                                                            
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
            <div class="col-sm-4" >
                <div class="become-volunteer">
                    <img class="img-responsive" src="plantilla/images/logo-icon.png" alt="" />
                    <h2>Sé parte del Cambio</h2>
                    <ol>
                        <li>Contribuye con acciones sencillas</li>
                        <li>No lleves: cañitas, bolsas de plastico, envases de tecnopor</li>
                        <li>Si vas a disfrutar de los días de verano en la playa reduce la generación de residuos y los que generes, dejalos en contenedores o llevalos contigo</li>
                        <li>Te lo recomienda Maquingenieros.</li>                                
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div><!--/#responsabilidad social--> 

<div id="photo-gallery" class="padding-bottom-two">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/1.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/1.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/2.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/2.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/3.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/3.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/4.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/4.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/5.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/5.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/6.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/6.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/7.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/7.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/8.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/8.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/9.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/9.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/10.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/10.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/11.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/11.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2">
                <div class="single-photo">
                    <div class="gallery-content">
                        <img class="img-responsive" src="plantilla/images/gallery/12.webp" alt="" />
                        <div class="photo-info">							
                            <a href="plantilla/images/gallery/full/12.webp" data-gallery="prettyPhoto"><i class="fa fa-camera"></i></a>
                            <h4>Maquingenieros</h4>
                            <span>2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#Photo-Gallery--> 

<div id="word-for-humanity" class="padding-top parallax-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text-center">
                <h1>Testimonios</h1>
                <div id="humanity-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">                                
                        <div class="item active">
                            <img class="img-responsive img-circle" src="plantilla/images/partner/partner1.jpg" alt="" />
                            <p>Me encanto los cursos prácticos,<br> muy buena la escuela de operadores Maquingenieros.</p>
                            <p class="word-author">VICTOR VENTURA</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive img-circle" src="plantilla/images/partner/partner2.jpg" alt="" />
                            <p>Es una empresa séria, que se empeña en formar operadores de equipo pesado. Agradezco a maquingenieros por convertirme un operador, gracias y sigan sus éxitos.</p>
                            <p class="word-author">YOGA SANTOS</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive img-circle" src="plantilla/images/partner/partner3.jpg" alt="" />
                            <p>Matriculé a mis hijos en el mejor centro de instrucción, muy confiable esta escuela de operadores realmente se los recomiendo.</p>
                            <p class="word-author">ETHEL MEDINA</p>
                        </div>
                        <div class="item">
                            <img class="img-responsive img-circle" src="plantilla/images/partner/partner4.jpg" alt="" />
                            <p>Me agradó la Escuela de Operadores "MAQUINGENIEROS", <br>los cursos son Full Práctica.</p>
                            <p class="word-author">ALBERTO MANTARI MEDINA</p>
                        </div>
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#humanity-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#humanity-carousel" data-slide-to="1"></li>
                        <li data-target="#humanity-carousel" data-slide-to="2"></li>
                        <li data-target="#humanity-carousel" data-slide-to="3"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div><!--/#testimonios-->

<div id="our-partner" class="padding-bottom">
    <div class="container">
        <div class="section-title">
            <h1>NUESTROS CONVENIOS</h1>
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
                            <img class="img-responsive" src="plantilla/images/partner/7.png" alt="" />
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive" src="plantilla/images/partner/8.png" alt="" />
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive" src="plantilla/images/partner/9.png" alt="" />
                        </div>
                        <div class="col-sm-2">
                            <img class="img-responsive" src="plantilla/images/partner/10.png" alt="" />
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
</div><!--/#convenios-->

@section('page-js-script-web')

<script type="text/javascript">
$("#menu_principal_inicio").addClass('active');
</script>
@stop

@endsection
