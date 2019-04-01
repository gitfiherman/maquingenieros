@extends('layouts.app')

@section('content')
<style>
    img{
        max-width:299px;
        max-height:299px;
    }
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload{
        width: 100%;
    }
</style>
<section id="widget-grid" class="">    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: -12px">
            <section id="widget-grid" class="">
                <div class="well">
                    <h1 class="txt-color-blueDark"><b>.:Usuarios:.</b></h1>
                    <div class="row">
                        <article class="col-sm-12 col-md-12 col-lg-8 sortable-grid ui-sortable" style="margin-bottom: 5px;">
                            <div class="input-group col-lg-12">
                                <input class="form-control" type="text" id="txt_buscar_usuario" placeholder="Buscar...">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-primary" onclick="btn_buscar_usuario()" type="button">
                                        <i class="fa fa-search"></i> Buscar...
                                    </button>
                                </div>
                            </div>   
                        </article>
                        <article class="col-sm-12 col-md-12 col-lg-4 sortable-grid ui-sortable">
                            <div class="input-group col-lg-12">
                                <div class="text-right">
                                    <section class="">
                                        <button onclick="Open_dlg_usuario();" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-plus"></i> Nuevo</button>
                                    </section> 
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>           
        </div>

        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table id="tabla_usuarios"></table>
            <div id="p_tabla_usuarios"></div>
        </article>
    </div>
</section>
<div class="modal fade" id="dlg_usuarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static" style="padding-left: 0px;">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">.: Usuarios :.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" id="form_dlg_usuario" enctype="multipart/form-data">
                    <fieldset>
                        <div class="row">
                            <section class="col-lg-5">
                                <input type="hidden" id="user_id_usuario" value="0">
                                <!--<img src="img/avatars/male.png" style="width: 99%; height: 89%;border: 1px solid #fff; outline: 1px solid #bfbfbf;" id='img-upload' />-->
                                
                                <div class="input-group">
                                    <!--<input type="file" id="imgInp">-->
<!--                                    <span class="input-group-btn">
                                        <span class="btn btn-default btn-file">
                                            Buscar… <input type="file" id="imgInp">
                                        </span>
                                    </span>
                                    <input type="text" id="user_cargar_foto" class="form-control" readonly>                                  -->
                                </div>                                
                            </section>
                            <section class="col-lg-7">
                                <div class="form-row">
                                    <div class="form-group col-md-6">                                        
                                        <label for="user_ape_pat">Apellido Paterno</label>
                                        <input type="text" class="form-control" id="user_ape_pat" placeholder="Ejm. Torres">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="user_ape_mat">Apellido Materno</label>
                                        <input type="text" class="form-control" id="user_ape_mat" placeholder="Ejm. Gonzaga">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="user_nom_com">Nombres</label>
                                    <input type="text" class="form-control" id="user_nom_com" placeholder="Ejm. Vladimiro">
                                </div>                        

                                <div class="form-group">
                                    <label for="user_usuario">Usuario</label>
                                    <input type="text" class="form-control" id="user_usuario" placeholder="Ejm. VGONZAGA">                        
                                </div>
                                <div class="form-group">
                                    <label for="user_email">E-mail</label>
                                    <input type="email" id="user_email" class="form-control" placeholder="Ejm. micorreo@gmail.com">
                                </div>                                
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="rol">Roles de Usuario</label>
                                        <select id="user_rol" class="form-control">
                                            <option value="0" selected="">Seleccione...</option>
                                            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                            <option value="EDITOR">EDITOR</option>
                                            <option value="ALUMNO">ALUMNO</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="estado">Estado</label>
                                        <select id="user_estado" class="form-control">                                            
                                            <option value="1">Habilitado</option>
                                            <option value="0">Deshabilitado</option>                                            
                                        </select>
                                    </div>
                                </div>                               
                            </section>
                        </div>
                    </fieldset>                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="btn_guardar_usuario()">Guardar</button>
                <button type="button" class="btn btn-danger" onclick="Close_dlg_usuario()">Cerrar</button>                
            </div>
        </div>
    </div>
</div>
@section('page-js-script')

<script type="text/javascript">

    $(document).ready(function () {
        $("#menu_logistica").show();
        $("#menu_logistica_usuarios").addClass('cr-active');

        jQuery("#tabla_usuarios").jqGrid({
            url: 'grid_get_usuarios?buscar=' + $("#txt_buscar_usuario").val(),
            datatype: 'json', mtype: 'GET',
            height: 'auto', autowidth: true,
            colNames: ['ID', 'Ap. Paterno', 'Ap. Materno', 'Nombres', 'Usuario', 'Rol', 'Edit.', 'Elim.'],
            rowNum: 15, sortname: 'id', sortorder: 'desc', viewrecords: true, caption: 'Lista Usuarios', align: "center",
            colModel: [
                {name: 'id', index: 'id', hidden: true},
                {name: 'ape_pat', index: 'ape_pat', width: 100},
                {name: 'ape_mat', index: 'ape_mat', width: 100},
                {name: 'nom_com', index: 'nom_com', width: 180},
                {name: 'usuario', index: 'usuario', width: 80},
                {name: 'rol', index: 'rol', align: 'center', width: 80},
                {name: 'update', index: 'update', align: 'center', width: 40},
                {name: 'delete', index: 'delete', align: 'center', width: 40}
            ],
            pager: '#p_tabla_usuarios',
            rowList: [15, 20, 30],
            gridComplete: function () {
                var rows = $("#tabla_usuarios").getDataIDs();
                if (rows.length > 0) {
                    var firstid = jQuery('#tabla_usuarios').jqGrid('getDataIDs')[0];
                    $("#tabla_usuarios").setSelection(firstid);
                }
            }
        });

        $(window).on('resize.jqGrid', function () {
            $("#tabla_usuarios").jqGrid('setGridWidth', $("#content").width());
        });

        $("#txt_buscar_usuario").keypress(function (e) {
            if (e.which == 13 && !e.shiftKey) {
                fn_actualizar_grilla('tabla_usuarios', 'grid_get_usuarios?buscar=' + $("#txt_buscar_usuario").val().toUpperCase());
            }
        });
        
        var extensionesValidas = ".png, .jpeg, .jpg";
        var pesoPermitido = 2048;

        // Cuando cambie #fichero
        $("#imgInp").change(function () {            
            $("#img-upload").attr("src", "img/avatars/male.png");
            if (validarExtension(this)) {
                if (validarPeso(this)) {
                    verImagen(this);
                }
            }
        });
        // Validacion de extensiones permitidas
        function validarExtension(datos) {
            var ruta = datos.value;
            var extension = ruta.substring(ruta.lastIndexOf('.') + 1).toLowerCase();
            var extensionValida = extensionesValidas.indexOf(extension);

            if (extensionValida < 0) {
                $.alert({
                    title: 'Alerta!',
                    content: 'La extensión no es válida Su fichero tiene de extensión: .' + extension
                });
                $("#img-upload").attr("src", "img/avatars/male.png");$("#user_cargar_foto").val('');
                return false;
            } else {
                return true;
            }
        }
        // Validacion de peso del fichero en kbs
        function validarPeso(datos) {
            if (datos.files && datos.files[0]) {
                var pesoFichero = datos.files[0].size / 1024;
                if (pesoFichero > pesoPermitido) {
                    $.alert({
                        title: 'Alerta!',
                        content: 'El peso maximo permitido del fichero es: ' + pesoPermitido + ' KBs Su fichero tiene: ' + pesoFichero + ' KBs'
                    });
                    $("#img-upload").attr("src", "img/avatars/male.png");$("#user_cargar_foto").val('');
                    return false;
                } else {
                    return true;
                }
            }
        }        
         // Vista preliminar de la imagen.
	function verImagen(datos) {
//            var filename = $('#imgInp').val();
//            if (filename.substring(3,11) == 'fakepath') {
//                filename = filename.substring(12);
//            }
	    if (datos.files && datos.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	            $('#img-upload').attr('src', e.target.result);
//                    $("#user_cargar_foto").val(filename);
	        };
	        reader.readAsDataURL(datos.files[0]);
	    }
	}
    });

    $('#dlg_usuarios').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });
</script>
@stop
<script src="{{ asset('archivos_js/system/usuarios.js') }}"></script>
@endsection
