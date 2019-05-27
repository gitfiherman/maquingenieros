@extends('app_welcome')

@section('content_webb')

<!--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">-->

<style type="text/css">
    body {
        height: 100%;
        background: url(plantilla/images/home/web1.jpg) no-repeat center top;
        background-attachment: fixed;
        background-size: cover;
        /*background-color: #669999;*/
        /*color: white;*/
    }  
</style>

<div id="contact" style="color: white">           
    <div class="container">
        <div class="section-title">
            <h1>Nosotros</h1>
        </div>
        <div class="row">
            <div class="our-details-tab padding-bottom">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="about-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item carousel-item active" style="background: #f2f2f2">
                                    <img class="img-fluid" style="width:91%" src="plantilla/images/logo_email.jpg" alt="">
                                </div>                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-6 tab-section">                        
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li><a class="active" href="#story" role="tab" data-toggle="tab">MAQUINGENIEROS E.I.R.L.</a></li>
                        </ul>
                        <div class="tab-content" style="color: black">
                            <div class="tab-pane fade in active show" id="story">                                
                                <p class="text-justify">Somos un Centro de Capacitación y Actualización en operación de Maquinaria Pesada y Tracto Camiones reconocido por el Ministerio de Educación y con respaldo del Ministerio de Transportes. Contamos con amplia trayectoria en la formación de operadores profesionales de equipo pesado, con altos conocimientos en Seguridad y Salud Ocupacional, Mantenimiento preventivo y Técnicas de Operación para el sector Minero, Industria y Construcción.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col-lg-6">
                        <div id="about-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <img class="img-fluid" src="plantilla/images/about/p1.jpg" alt="">
                                </div>                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-6 tab-section">                        
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li><a class="active" href="#story" role="tab" data-toggle="tab">Mision</a></li>
                        </ul>
                        <div class="tab-content" style="color: black">
                            <div class="tab-pane fade in active show" id="story">                                
                                <p class="text-justify">Brindar servicios de calidad con el objetivo de formar profesionales altamente competitivos, éticos y emprendedores con amplio conocimiento en Operación de Equipo Pesado, Mantenimiento preventivo y Responsabilidad Social, potenciando sus conocimientos y habilidades, así mismo brindar programas de capacitación a empresas en función a los desafíos del mercado laboral para incrementar su productividad y valor contribuyendo al desarrollo local, regional y nacional.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col-lg-6">
                        <div id="about-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <img class="img-fluid" src="plantilla/images/about/p2.jpg" alt="">
                                </div>                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-6 tab-section">                        
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li><a class="active" href="#story" role="tab" data-toggle="tab">Vision</a></li>
                        </ul>
                        <div class="tab-content" style="color: black">
                            <div class="tab-pane fade in active show" id="story">                                
                                <p class="text-justify">Constituirnos como el Centro de Capacitación Y Actualización líder en la formación de profesionales éticos, altamente competitivos y ser reconocidos por la mejora constante a través de una excelente preparación académica y una solidad formación de valores.</p> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                    <div class="col-lg-6">
                        <div id="about-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item carousel-item active">
                                    <img class="img-fluid" src="plantilla/images/about/p3.jpg" alt="">
                                </div>                                
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-6 tab-section">                        
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li><a class="active" href="#story" role="tab" data-toggle="tab">Valores</a></li>
                        </ul>
                        <div class="tab-content" style="color: black">
                            <div class="tab-pane fade in active show" id="story">                                
                                <p>Ética rofesional</p> 
                                <p>Calidad</p>                                
                                <p>Trabajo en equipo</p>
                                <p>Innovación</p>
                                <p>Honestidad</p>
                                <p>Compromiso</p>
                                <p>Mejora Continua</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@section('page-js-script-web')
<script type="text/javascript">
    $("#menu_principal_nosotros").addClass('active');
</script>
@stop

@endsection
