@extends('layouts.app')

@section('content')
<section id="widget-grid" class="">    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: -12px">
            <section id="widget-grid" class="">
                <div class="well">
                    <h1 class="txt-color-blueDark"><b>.:Base de Datos:.</b></h1>
                    <div class="row">
                        <article class="col-sm-12 col-md-12 col-lg-6 sortable-grid ui-sortable" style="margin-bottom: 5px;">
                            <div class="input-group col-lg-12">
                                <input class="form-control" type="text" id="txt_buscar_llamada" placeholder="Buscar...">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-primary" onclick="buscar_llamada();" id="btn_buscar_llamada" type="button">
                                        <i class="fa fa-search"></i> Buscar...
                                    </button>
                                </div>
                            </div>   
                        </article>
                        <article class="col-sm-12 col-md-12 col-lg-3 sortable-grid ui-sortable">
                            <div class="input-group col-lg-12">
                                <input placeholder="dd-mm-aaaa" id="prox_fecha_buscar" class="form-control datepicker" data-dateformat='dd-mm-yy' maxlength="10" style="padding-left:7px;padding-right:5px">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-primary" onclick="buscar_prox_fecha();" id="btn_buscar_prox_llamada" type="button">
                                        <i class="fa fa-calendar"></i> Prox. Fecha
                                    </button>
                                </div>
                            </div> 
                        </article>
                        <article class="col-sm-12 col-md-12 col-lg-4 sortable-grid ui-sortable">
                            <div class="input-group col-lg-12">
                                <div class="text-right">
                                    <section class="">
                                        <button onclick="Open_dlg_llamadas()" type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-plus"></i> Nuevo</button>
                                    </section> 
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>           
        </div>

        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table id="tabla_call_center"></table>
            <div id="pager_tabla_call_center"></div>
        </article>
    </div>
</section>

<div class="modal fade" id="dlg_llamadas" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_dlg_llamadas">.: LLAMADAS :.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('save_edit_datallamadas')}}" id="form_dlg_llamadas">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="hidden" id="txt_id_llamada" value="">
                            <label for="ape_com">Apellidos</label>
                            <input type="text" class="form-control" id="ape_com" placeholder="Ejm. Velasquez">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nom_com">Nombres</label>
                            <input type="text" class="form-control" id="nom_com" placeholder="Ejm. Vladimir">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="movil">Celular</label>
                            <input type="text" class="form-control" id="movil" onkeypress="return soloNumeroTab(event);" placeholder="Numero de Celular">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fijo">Tel. Fijo</label>
                            <input type="text" class="form-control" id="fijo" onkeypress="return soloNumeroTab(event);" placeholder="Telefino fijo">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="obs">Observación</label>
                        <textarea id="obs" rows="2" class="form-control" placeholder="Observaciones sobre la llamada"></textarea>
                    </div>                    
                    <div class="form-group">
                        <label for="id_cur">Cursos</label>
                        <select id="id_cur" class="form-control">
                            <option value="select" selected="" disabled="">Seleccione...</option>
                            @foreach ($cursos as $cursos)
                            <option value='{{$cursos->id}}'>{{$cursos->desc}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="otros_cur">Otros Cursos</label>
                        <input type="text" id="otros_cur" class="form-control" placeholder="Ejm. Volquete, Cargador Frontal"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fch_llamada">Fecha</label>
                            <input placeholder="dd-mm-aaaa" id="fch_llamada" class="form-control datepicker" data-dateformat='dd-mm-yy' value="{{date('d-m-Y')}}" maxlength="10" style="padding-left:7px;padding-right:5px">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="prox_fch_llamada">Proxima Fecha</label>
                            <input placeholder="dd-mm-aaaa" id="prox_fch_llamada" class="form-control datepicker" data-dateformat='dd-mm-yy' value="{{date('d-m-Y')}}" maxlength="10" style="padding-left:7px;padding-right:5px">
                        </div>                                               
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id_est_llamada">Estado</label>
                            <select id="id_est_llamada" class="form-control">
                                <option value="select" selected="" readonly>Seleccione...</option>
                                @foreach ($est_llamada as $est_llamada)
                                <option value='{{$est_llamada->id}}'>{{$est_llamada->desc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="id_asesor">Asesor</label>
                            <select id="id_asesor" class="form-control">
                                <option value="select" selected="" readonly>Seleccione...</option>
                                @foreach ($asesores as $asesores)
                                <option value='{{$asesores->id}}'>{{$asesores->nom_com}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="wasap">
                        <label class="form-check-label" for="wasap">
                            WhatsApp
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="btn_guardar_llamada()">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>                
            </div>
        </div>
    </div>
</div>
@section('page-js-script')

<script type="text/javascript">
    $(document).ready(function () {
       
        $("#menu_logistica").show();
        $("#menu_logistica_database").addClass('cr-active');

        jQuery("#tabla_call_center").jqGrid({
            url: 'grid_data_llamadas?buscar='+$("#txt_buscar_llamada").val()+'&prox_fecha_buscar='+$("#prox_fecha_buscar").val(),
            datatype: 'json', mtype: 'GET',
            height: 'auto', autowidth: true,
            colNames: ['ID', 'Apellidos', 'Nombres', 'Telefono', 'Observacion', 'Curso', 'Fecha', 'Prox. fecha', 'Edit', 'Elim'],
            rowNum: 15, sortname: 'id', sortorder: 'desc', viewrecords: true, caption: 'Lista Entradas', align: "center",
            colModel: [
                {name: 'id', index: 'id', hidden: true},
                {name: 'ape_com', index: 'ape_com', width: 60},
                {name: 'nom_com', index: 'nom_com', width: 60},
                {name: 'movil', index: 'movil', align: 'center', width: 40},
                {name: 'obs', index: 'obs', width: 180},
                {name: 'curso', index: 'curso', width: 80},
                {name: 'fch_llamada', index: 'fch_llamada', align: 'center', width: 40},
                {name: 'prox_fch', index: 'prox_fch',align: 'center', width: 40},
                {name: 'edit', index: 'edit', width: 15, align: 'center'},
                {name: 'elim', index: 'elim', width: 15, align: 'center'}
            ],
            pager: '#pager_tabla_call_center',
            rowList: [15, 20, 30],
            gridComplete: function () {
                var rows = $("#tabla_call_center").getDataIDs();
                if (rows.length > 0) {
                    var firstid = jQuery('#tabla_call_center').jqGrid('getDataIDs')[0];
                    $("#tabla_call_center").setSelection(firstid);
                }
            }
        });
//        jQuery("#btnShowHide").click(function () {
//            jQuery("#tabla_call_center").setColumns(options);
//            return false;
//        });
        $(window).on('resize.jqGrid', function () {
            $("#tabla_call_center").jqGrid('setGridWidth', $("#content").width());
        });
        $("#txt_buscar_llamada").keypress(function (e) {
            if (e.which == 13 && !e.shiftKey) {
                fn_actualizar_grilla('tabla_call_center','grid_data_llamadas?buscar='+$("#txt_buscar_llamada").val().toUpperCase());
            }
        });
    });
    $('#dlg_llamadas').on('hidden.bs.modal', function () {
        $(this).find('form').trigger('reset');
    });
    $('#wasap').on('change', function () {
        $('#wasap').val(this.checked ? 1 : 0);
    });



</script>
@stop
<script src="{{ asset('archivos_js/system/data_CallCenter.js') }}"></script>
@endsection
