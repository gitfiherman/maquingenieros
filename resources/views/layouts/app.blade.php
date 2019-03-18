<!DOCTYPE html>
<html class="translated-ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>SISTEMA</title>
        <!--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">-->
        <!--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">-->

        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link href="{{ asset('css/smartadmin-production-plugins.min.css') }}" rel="stylesheet" type="text/css" media="screen">
        <link href="{{ asset('css/smartadmin-production.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/smartadmin-skins.min.css') }}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/font-awesome.min.css">

        <link rel="sshortcut icon" href="plantilla/favicon_2.png">

        <link rel="apple-touch-icon" href="{{ asset('img/splash/sptouch-icon-iphone.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/splash/touch-icon-ipad.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('img/splash/touch-icon-iphone-retina.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('img/splash/touch-icon-ipad-retina.png') }}">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">

        <link rel="apple-touch-startup-image" href="{{ asset('img/splash/ipad-landscape.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
        <link rel="apple-touch-startup-image" href="{{ asset('img/splash/ipad-portrait.png') }}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
        <link rel="apple-touch-startup-image" href="{{ asset('img/splash/iphone.png') }}" media="screen and (max-device-width: 320px)">

        <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">
        <link href="{{ asset('css/jquery-confirm.css') }}" rel="stylesheet">
        <!--tablas-->
        <link href="{{ asset('datatables/multiple-select.css') }}" rel="stylesheet">
        <!--<link href="{{ asset('datatables/DataTables/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">-->

    </head>
    <body class="desktop-detected pace-done fixed-header fixed-navigation">
        <header id="header">
            <div id="logo-group" class="visible-md visible-lg visible-sm hidden-xs">                
                <span id="logo"> <img src="img/log.png" alt="SmartAdmin"> </span>
            </div>
            <div class="project-context hidden-xs">
                <span class="label">LocaL:</span>
                <span class="project-selector dropdown-toggle" data-toggle="dropdown">AREQUIPA </span>

            </div>
            @if (Auth::guest())
            <div class="pull-right" style="margin-top: 8px">
                <a href="{{ route('login') }}" class="btn btn-default ">Iniciar Session</a>                
            </div>  
            @else
            <div class="pull-right">
                <div id="hide-menu" class="btn-header pull-right">
                    <span> <a href="javascript:void(0);" data-action="toggleMenu" title="Colapsar Menu"><i class="fa fa-reorder"></i></a> </span>
                </div> 
                <div id="logout" class="btn-header transparent pull-right">
                    <span>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" title="Salir" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> 

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </span>
                </div>     
                <ul class="header-dropdown-list">
                    <li class="">
                        <a href="#" class="dropdown-toggle userdropdown pull-right" data-toggle="dropdown" style="margin-top: 8px;font-weight:bold;text-transform: uppercase; color: white"> 
                            <img src="img/avatars/male.png" style="width: 35px; height: 35px;border: 1px solid #fff; outline: 1px solid #bfbfbf;">
                            <span style="color: white">Bienvenido, {{ Auth::user()->usuario }} </span>  
                        </a>
                        <ul class="dropdown-menu pull-right">                                                    
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Cambiar Password</a>
                            </li>
                            <div class="divider"></div>
                            <li>
                                <a href="javascript:void(0);" class="padding-10 padding-top-0 padding-bottom-0"><i class="fa fa-cog"></i> Setting</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>    
            @endif
        </header>
        <!-- Dialogo de alertas -->
        <div id="alertdialog" style="display: none;" ></div>

        @if (!Auth::guest())
        <aside id="left-panel">        
            <div class="login-info">
                <span>
                    <a>
                        <img src="img/avatars/male.png" alt="me" style="width: 22px; height: 25px;" class="offset"/> 
                        <span style="color: white;">
                            Usuario:{{ Auth::user()->usuario }}
                        </span>
                        <!--<i class="fa fa-angle-down" style="color: white;"></i>-->
                    </a> 
                </span>
            </div>
            <nav>
                <ul>
                    <li class="">
                        <a href="#" title="Logistica"><i class="fa fa-lg fa-fw fa-cog fa-desktop"></i> <span class="menu-item-parent">Logistica</span></a>
                        <ul id="menu_logistica">
                            <li id="menu_logistica_usuarios">
                                <a href="usuarios" title=""><i class="fa fa-user"></i>Usuarios</a>
                            </li>                            
                            <li id="menu_logistica_database">
                                <a href="{{route('data_callcenter')}}" title="datos de todas las llamadas realizadas"><i class="fa fa-database"></i>Base de datos</a>
                            </li>
                            <li id="menu_logistica_contact_email">
                                <a href="{{route('contact_email')}}" title="datos de todas las llamadas realizadas"><i class="fa fa-paper-plane"></i>Emails</a>
                            </li>                             
                        </ul>                        
                    </li>
                    <li class="">
                        <a href="#" title="Reportes en Pdf"><i class="fa fa-lg fa-fw fa-cog fa-bar-chart-o"></i> <span class="menu-item-parent">Reportes</span></a>
                        <ul id="menu_reportes">                                                         
                            <li id="menu_reportes_salidas">
                                <a href="reporte_salida" title="Reporte de Salidas"><i class="fa fa-file-pdf-o"></i>Salidas</a>
                            </li>                            
                        </ul>                        
                    </li>
                </ul>
            </nav>
            <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>
        </aside>
        @endif

        <div id="main" role="main">            
            <div id="content">
                @yield('content') 
            </div>
        </div>

        <div class="page-footer" style="background: #ffffff; text-align: center">
<!--            <section class="col-lg-2">
                <img class="hidden-xs" src="plantilla/favicon_2.png" width="35" style="margin-top: -7px">
            </section>-->
            <section class="col-lg-4" style="padding-right: 0px;">
                <span class="txt-color-darken">VladSystem </span>
                <span class="txt-color-darken hidden-xs">Soluciones en Informática y Sistemas.</span>
            </section>
            <section class="col-lg-6 hidden-xs">
                <a href="https://maquingenieros.com" target="blank" style="color: #11292E;"><u>https://maquingenieros.com</u></a>
            </section>
        </div>
        <!--************************                  CAMBIAR FOTO USUARIO         *******************************-->        
        <div id="dialog_Cambiar_Foto_Usuario" style="display: none">
            <div class="widget-body">
                <div  class="smart-form">
                    <div class="panel-group">                
                        <div class="panel panel-success" style="border: 0px !important;">
                            <div class="panel-heading bg-color-success">.:: Selecciona Tu Foto ::.</div>
                            <div class="panel-body">
                                <form id="form_cambiar_foto" name="form_cambiar_foto">
                                    <div class="text-center col col-12" style="margin-top: 10px;">                            
                                        <img id="vw_usuario_cambiar_foto_img" src="{{asset('img/avatars/male.png')}}" name="vw_usuario_cambiar_foto_img" size="2048" style="width: 233px;height: 230px;border: 1px solid #fff; outline: 1px solid #bfbfbf;margin-bottom: 14px;">
                                        <label class="label">Seleccionar Foto:</label>
                                        <label class="input"> 
                                            <input type="file" id="vw_usuario_cambiar_cargar_foto" name="vw_usuario_cambiar_cargar_foto" accept="image/png, image/jpeg, image/jpg">
                                            </div>
                                            </form>
                                            </div>
                                            </div>
                                            </div>                 
                                            </div>        
                                            </div>
                                            </div>
                                            <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
                                            <script src="{{ asset('js/libs/jquery-2.1.1.min.js') }}"></script>

                                            <script src="{{ asset('js/libs/jquery-ui-1.10.3.min.js') }}"></script>


                                            <script src="{{ asset('archivos_js/global_function.js') }}"></script>

                                            <script src="{{ asset('js/app.config.js') }}"></script>
                                            <script src="{{ asset('js/app.min.js') }}"></script>
                                            <script src="{{ asset('js/block_ui.js') }}"></script>        
                                            <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>

                                            <script src="{{ asset('js/plugin/jqgrid/jquery.jqGrid.min.js') }}"></script>
                                            <script src="{{ asset('js/plugin/jqgrid/grid.locale-en.min.js') }}"></script>

                                            <script src="{{ asset('js/plugin/masked-input/jquery.maskedinput.min.js') }}"></script>

                                            <script src="{{ asset('js/notification/SmartNotification.min.js')}}"></script>

                                            <script src="{{ asset('js/jquery-confirm.js')}}"></script>        
                                            <script src="{{ asset('archivos_js/configuracion.js') }}"></script>

                                            <!--tablas-->        

                                            <script src="{{ asset('datatables/multiple-select.js') }}"></script>
                                            <script src="{{ asset('datatables/DataTables/js/jquery.dataTables.min.js') }}"></script>
                                            <!--<script src="{{ asset('datatables/DataTables/js/dataTables.bootstrap.min.js') }}"></script>-->


                                            @if (!Auth::guest())

                                            <script>
                            $(document).ready(function () {
                                pageSetUp();
                                $.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
                                    _title: function (title) {
                                        if (!this.options.title) {
                                            title.html("&#160;");
                                        } else {
                                            title.html(this.options.title);
                                        }
                                    }
                                }));
                                $("#alertdialog").dialog({
                                    autoOpen: false, modal: true, title: "<div class='widget-header'><h4>.: Mensaje del Sistema :.</h4></div>", buttons: [{html: '<span class="btn-label"><i class="glyphicon glyphicon-check"></i></span>&nbsp; Aceptar',
                                            "class": "btn btn-labeled bg-color-blue txt-color-white", click: function () {
                                                $(this).dialog("close");
                                                if (focoglobal != "") {
                                                    foco(focoglobal);
                                                }
                                                focoglobal = "";
                                            }}]
                                });
                            });
                                            </script>
                                            @endif

                                            @yield('page-js-script')
                                            </body>
                                            </html>
