@extends('app_welcome')

@section('content_webb')

<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

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

<div id="contact">           
    <div class="container">
        <div class="section-title">
            <h1 style="color: white">CURSOS Maquinaria Pesada y Tracto Cami&oacute;n</h1>
        </div>
        <div class="row" >                          		
            <div class="carousel-inner">
                <div style="padding: 5px 10px">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/1.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Volquete Volvo FMX 480</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_volvo_fmx" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="list border-two">
                                <img class="img-responsive" src="plantilla/images/cause-list/2.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Cargador Fronta Cat 966H</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_cargador_frontal" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/3.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Caja Eaton Fuller</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_caja_fuller" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                    </div>
                </div>
                <div style="padding: 5px 10px;margin-top:15px">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/4.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Manejo Defensivo 4x4</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_camioneta_md" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/5.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Excavadora Hidraulica</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_hexcavadora_hidraulica" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/6.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Retroexcavadora</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_retroexcavadora" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                    </div>
                </div>
                <div style="padding: 5px 10px;margin-top:15px">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/7.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Volvo FMX Caja I-SHIFT</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_i_shift" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/8.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Minicargador</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_minicargador" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/9.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Montacargas</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_montacargas" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                    </div>
                </div>
                <div style="padding: 5px 10px;margin-top:15px">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/10.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Motoniveladora</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_motoniveladora" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/11.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Rodillo Compactador</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_rodillo" class="btn btn-primary">Más Información</a>
                            </div>								
                        </div>
                        <div class="col-sm-4">
                            <div class="image">
                                <img class="img-responsive" src="plantilla/images/cause-list/12.jpg" alt="" />
                            </div>
                            <div class="list-info">
                                <h2>Tractor Oruga</h2>
                                <p><span>CURSO 100% PRÁCTICO</span></p>
                                <p>Doble Certificación con respaldo del MTC y Ministerio de Educación.</p>
                                <a href="curso_tractor_oruga" class="btn btn-primary">Más Información</a>
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
    $("#menu_principal_cursos").addClass('active');
</script>
@stop

@endsection
