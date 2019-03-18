@extends('layouts.app')

@section('content')
<section id="widget-grid" class="">    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: -12px">
            <section id="widget-grid" class="">
                <div class="well">
                    <h1 class="txt-color-blueDark"><b>.:Contactos E-mail:.</b></h1>
                    <div class="row">
<!--                        <article class="col-sm-12 col-md-12 col-lg-8 sortable-grid ui-sortable" style="margin-bottom: 5px;">
                            <div class="input-group col-lg-12">
                                <input class="form-control" type="text" placeholder="Buscar...">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btn-primary" type="button">
                                        <i class="fa fa-search"></i> Buscar...
                                    </button>
                                </div>
                            </div>   
                        </article>-->
<!--                        <article class="col-sm-12 col-md-12 col-lg-4 sortable-grid ui-sortable">
                            <div class="input-group col-lg-12">
                                <div class="text-right">
                                    <section class="">
                                        <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-plus"></i> Nuevo</button>
                                        
                                    </section> 
                                </div>
                            </div>
                        </article>-->
                    </div>
                </div>
            </section>           
        </div>

        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table id="tabla_contact_email"></table>
            <div id="pager_tabla_contact_email"></div>
        </article>
    </div>
</section>

@section('page-js-script')

<script type="text/javascript">
    $(document).ready(function () {
        $("#menu_logistica").show();
        $("#menu_logistica_contact_email").addClass('cr-active');

        jQuery("#tabla_contact_email").jqGrid({
            url: 'grid_contact_email',
            datatype: 'json', mtype: 'GET',
            height: 'auto', autowidth: true,
            colNames: ['ID', 'Nombres', 'Apellidos','Comentario' ,'Email', 'Region', 'Area Form', 'Area Trabajo', 'Industria'],
            rowNum: 15, sortname: 'id', sortorder: 'desc', viewrecords: true, caption: 'Lista Contactos', align: "center",
            colModel: [
                {name: 'id', index: 'id', hidden: true},
                {name: 'nombres', index: 'nombres', width: 80},
                {name: 'apellidos', index: 'apellidos', width: 80},
                {name: 'message', index: 'message', width: 220},
                {name: 'email', index: 'email', width: 90},
                {name: 'region', index: 'region', align: 'center', width: 50},
                {name: 'area_formacion', index: 'area_formacion', align: 'center', width: 80},
                {name: 'area_trabajo', index: 'area_trabajo',align: 'center', width: 70},                
                {name: 'industria', index: 'industria', width: 50, align: 'center'}
            ],
            pager: '#pager_tabla_contact_email',
            rowList: [15, 20, 30],
            gridComplete: function () {
                var rows = $("#tabla_contact_email").getDataIDs();
                if (rows.length > 0) {
                    var firstid = jQuery('#tabla_contact_email').jqGrid('getDataIDs')[0];
                    $("#tabla_contact_email").setSelection(firstid);
                }
            }            
        });
        
        $(window).on('resize.jqGrid', function () {
            $("#tabla_contact_email").jqGrid('setGridWidth', $("#content").width());
        });
    });

</script>
@stop

@endsection
