@extends('app_welcome')

@section('content_webb')

<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

<style type="text/css">
    #video-section{
        /*        background-color: #004085;*/
        background-image: url(plantilla/images/cargador_frontal.jpg);
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

<div id="video-section" class="parallax-section">
    <div class="container">
        
        <div class="row">
            <div class="col-sm-6 v_text_fondo_home">
                <h1 style="font-weight: 300;">CARGADOR FRONTAL</h1>
                <p class="lead" >Capacitación y entrenamiento con certificación especializada.</p>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active"><a href="#video" class="btn btn-primary" role="tab" data-toggle="tab">Video</a></li>
                    <li><a href="#mobilization" class="btn btn-primary" role="tab" data-toggle="tab">Foto</a></li>                                
                </ul>
                <p class="text-justify">El curso de Cargador Frontal dictado por la Escuela Maquingenieros está orientado primordialmente al aprendizaje optimo en la operación de Maquinaria Pesada, el curso se divide en tres fases: Seguridad, Inspección alrededor de la unidad y Operación del equipo. La fase de Seguridad es una de las más importantes en su desarrollo como operador ya que se le brinda conocimientos necesarios que le permitirán minimizar los riesgos laborales protegiendo su vida y la de los demás. En la fase de Inspección alrededor de la unidad aprenderá las partes de la maquinaria y su funcionamiento y en la última fase el alumno aprenderá   técnicas y desarrollará habilidades de operación de equipo pesado.</p>
            </div>
            <div class="col-sm-6">                        
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="video">
                        <div class="embed-responsive embed-responsive-4by3">
                            <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/315980091"></iframe>						
                        </div>
                    </div>
                    <div class="tab-pane fade" id="mobilization">
                        <img class="img-responsive" src="plantilla/images/cursos/cargador_frontal.jpg" alt="" />
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <h1 style="color:#80E6FF; font-weight: 300;">Objetivos del Curso</h1>
                <div class="row" style="padding: 0px 0px 0px 20px; font-size: 17px">
                    <ul> 
                        <li>1.- Aplicar conceptos de seguridad en la operación del equipo.</li> 
                        <li>2.- Reconocer cada uno de los componentes que conforman el equipo.</li>
                        <li>3.- Optimización de vida útil de los elementos de desgaste y mantenimiento correcto.</li>
                        <li>4.- Aplicar técnicas y procedimientos correctos en la operación del equipo.</li>
                        <li>5.- Corregir las malas prácticas empleadas en la operación de Cargador Frontal.</li>
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
                        <li>4.- Enseñanza personalizada con Instructores Capacitados de Alto Nivel.</li>
                        <li>5.- Bolsa de trabajo para nuestros mejores operadore.</li>
                        <li>6.- Asesoramiento permanente para la obtención, revalidación, recategorización y AIV (Licencia especial), según MTC para todos nuestros participantes.</li>
                        <li>7.- Certificado como Operador de Cargador Frontal con respaldo del MTC.</li>
                        <li>8.- Certificado de Capacitación en Manejo Defensivo con respaldo del MTC.</li>                        
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
