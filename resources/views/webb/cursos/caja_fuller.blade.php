@extends('app_welcome')

@section('content_webb')

<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

<style type="text/css">
/*    body {
        height: 100%;
        background: url(plantilla/images/home/web1.jpg) no-repeat center top;
        background-attachment: fixed;
        background-size: cover;
        background-color: #669999;
        color: white;
    }*/
    #video-section{
        /*        background-color: #004085;*/
        background-image: url(plantilla/images/caja_fuller.jpg);
        background-color: #101417;
        padding: 150px 0px;        
        color: white;
    }
    .parallax-section {
        /*background-position: 50% 0;*/
        background-repeat: no-repeat;

        background-attachment: fixed;
        width: 100%;
        min-height: 437px;
        color: #fff;        
    }
</style>
 
<!--<div id="contact">           
    <div class="container">
        <div class="section-title">
            <h1 style="color: white">Cursos / Tracto Cami&oacute;n</h1>
        </div>
        <div class="row">                          		


        </div>
    </div>
</div>-->

<div id="video-section" class="parallax-section">
    <div class="container">
        
        <div class="row">
            <div class="col-sm-6 v_text_fondo_home">
                <h1 style="font-weight: 300;">CAJA EATON FULLER</h1>
                <p class="lead" >Especialízate en operación de vehículos americanos Caja Fuller de 18 velocidades con carga.</p>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#video" class="btn btn-primary" role="tab" data-toggle="tab">Video</a></li>
                    <li><a href="#mobilization" class="btn btn-primary" role="tab" data-toggle="tab">Foto</a></li>                                
                </ul>
                <p class="text-justify">El curso de Operación Semi Trailer Caja Fuller dictado por la Escuela Maquingenieros está orientado primordialmente al aprendizaje optimo en la operación de Tracto Camiones, el curso se divide en tres fases: Seguridad, Inspección alrededor de la unidad y Operación de la unidad. La fase de Seguridad es una de las más importantes en su desarrollo como operador ya que se le brinda conocimientos necesarios que le permitirán minimizar los riesgos laborales protegiendo su vida y la de los demás, así como las recomendaciones básicas sobre los riesgos y peligros en operaciones mineras. En la fase de Inspección alrededor de la unidad aprenderá los componentes de la unidad y su funcionamiento y en la última fase aprenderá técnicas y desarrollará habilidades de operación de vehículos americanos.</p>
            </div>
            <div class="col-sm-6">                        
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="video">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/315980091"></iframe>						
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mobilization">
                        <img class="img-responsive" src="plantilla/images/cursos/caja_fuller.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <h1 style="color:#80E6FF; font-weight: 300;">Objetivos del Curso</h1>
                <div class="row" style="padding: 0px 0px 0px 20px; font-size: 17px">
                    <ul> 
                        <li>1.- Reconocer los componentes del Camión americano.</li> 
                        <li>2.- Aplicar técnicas de conducción a la defensiva - Operación tipo mina.</li>
                        <li>3.- Aplicar la técnica de doble embragada y revolución.</li>
                        <li>4.- Desarrollar habilidades correspondientes a la operación de Caja Fuller de 18 velocidades.</li>
                        <li>5.- Operar la unidad aplicando buenas prácticas y cumpliendo los procedimientos de seguridad.</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12">
                <h1 style="color:#80E6FF; font-weight: 300;">Beneficios</h1>
                <div class="row" style="padding: 0px 0px 0px 20px; font-size: 17px">
                    <ul> 
                        <li>1.- Metodología de enseñanza apropiada.</li> 
                        <li>2.- Equipos de última generación.</li>
                        <li>3.- Curso 100% practico en condiciones reales > OPERACIÓN TIPO MINA.</li>
                        <li>4.- Practicas con carreta incorporada.</li>
                        <li>5.- Enseñanza personalizada con Instructores Capacitados de Alto Nivel.</li>
                        <li>6.- Bolsa de trabajo para nuestros mejores operadore.</li>
                        <li>7.- Asesoramiento permanente para la obtención, revalidación, recategorización y AIV (Licencia especial), según MTC para todos nuestros participantes.</li>
                        <li>8.- Certificado en Operación de Semi-Trailer Caja Eaton Fuller con respaldo del MTC.</li>
                        <li>9.- Certificado de Capacitación en Manejo Defensivo con respaldo del MTC.</li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
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
    $("#menu_principal_cursos").addClass('active');
</script>
@stop

@endsection
