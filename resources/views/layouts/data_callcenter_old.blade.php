@extends('layouts.app')

@section('content')
<section id="widget-grid" class="">    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="margin-bottom: -12px">
            <div class="well well-sm well-light">
                <h1 class="txt-color-green"><b>ENTRADAS</b></h1>
                <div class="row">
                    <div class="col-xs-12">                        
                        <div class="text-right">  
                            <div class="col-xs-2 col-sm-12 col-md-12 col-lg-3">
                                <label>Fecha:</label>
                                <label class="input">
                                    <input id="vw_entradas_txt_select_fecha" type="text" data-mask="99/99/9999" data-mask-placeholder=".." value="<?php date_default_timezone_set('America/Lima');echo date('d/m/Y') ?>">
                                </label>
                            </div>
                           <section class="">
                                <a class="btn btn-success" href="javascript:void(0);"><i class="fa fa-plus"></i> Nuevo</a>
                                <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-plus"></i> Editar</a>
                                <a class="btn btn-danger" href="javascript:void(0);"><i class="fa fa-plus"></i> Eliminar</a>                                
                            </section> 
                        </div>
                    </div>
                </div> 
            </div> 
<!--            <div class="well well-sm well-light">                
                <div class="row">
                    <div class="col-xs-12">                        
                        <div class="text-right">                            
                            <section>
                                <div class="jarviswidget jarviswidget-color-white" style="margin-bottom: 15px;"  >
                                    <header style="background: #05879D !important;color: white" >
                                        <span class="widget-icon"> <i class="fa fa-align-justify"></i> </span>
                                        <h2>BASE DE DATOS - CALL CENTER</h2>
                                    </header>
                                </div>
                            </section>

                            <section class="">
                                <a class="btn btn-success" href="javascript:void(0);"><i class="fa fa-plus"></i> Nuevo</a>
                                <a class="btn btn-primary" href="javascript:void(0);"><i class="fa fa-plus"></i> Editar</a>
                                <a class="btn btn-danger" href="javascript:void(0);"><i class="fa fa-plus"></i> Eliminar</a>                                
                            </section>                            
                        </div>
                    </div>
                </div> 
            </div>                   -->
        </div>        
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="jarviswidget jarviswidget-color-blueDark jarviswidget-sortable"  data-widget-editbutton="false" role="widget" style="position: relative; opacity: 1; left: 0px; top: 0px;">
                <header role="heading" class="ui-sortable-handle"><div class="jarviswidget-ctrls" role="menu"></div>
                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                    <h2>Tabla de Llamadas</h2>
                    <span class="jarviswidget-loader"><i class="fa fa-refresh fa-spin"></i></span>
                </header>
                <div role="content">
                    <div class="jarviswidget-editbox"></div>
                    <div class="widget-body">
                        <div class="table-responsive">
                            <section class="col-lg-12" style="margin-bottom: 5px; padding-left: 0px; padding-right: 0px;">
                                <div class="col-lg-3" >
                                    <label>Columnas</label>
                                    <select name="togle_col" id="togle_col">
                                        <option value="0">N°</option>
                                        <option value="1">Apellidos</option>
                                        <option value="2">Nombres</option>
                                        <option value="3">Celular</option>    
                                        <option value="3">Observación</option>
                                        <option value="5">Action</option>
                                    </select>
                                </div>
                            </section>
                            <table class="table table-bordered" id="mytable">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Apellidos</th>
                                        <th>Nombres</th>
                                        <th>Celular</th>
                                        <th>Observación</th>
                                        <th>Acción</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>N°</th>
                                        <th>Apellidos</th>
                                        <th>Nombres</th>
                                        <th>Celular</th>
                                        <th>Observación</th>
                                        <th>Acción</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </div>
</section>
@section('page-js-script')

<script type="text/javascript">
    function hideallcol() {
        for (var i = 0; i < 4; i++) {
            columns = my_table.column(i).visible(0);
        }
    }
    function showallcol() {
        for (var i = 0; i < 4; i++) {
            my_table.column(i).visible(1);
        }
    }
    jQuery(document).ready(function () {
        $("#menu_logistica").show();
        $("#menu_logistica_database").addClass('cr-active');

        $('#mytable').DataTable({
            processing: true, serverSide: true,select: true,
            ajax: {
                "url": "<?= route('dataCallCenterProceso') ?>",
                "dataType": "json",
                "type": "POST",
                "data": {"_token": "<?= csrf_token() ?>"}
            },
            columns: [
                {"data": "id"},
                {"data": "ape_com"},
                {"data": "nom_com"},
                {"data": "movil"},
                {"data": "obs"},
                {"data": "action", "searchable": false, "orderable": false}
            ],
            columnDefs: [
                { width: "5%", targets: [0] },                
                { className: 'text-right', targets: [] },
                { className: 'text-center', targets: [0,3] }
            ],
            lengthMenu: [[11, 25, 50, -1], [11, 25, 50, "All"]]
        });


        my_table = jQuery('#mytable').DataTable();
        my_table.on( 'select', function ( e, dt, type, indexes ) {
            if ( type === 'row' ) {
                var data = table.rows(indexes).data().pluck('id');
                alert(data);
                
            }
        } );
        jQuery('#togle_col').multipleSelect({
            width: 200,
            onClick: function (view) {
                var selectedItems = jQuery('#togle_col').multipleSelect('getSelects');
                hideallcol();
                for (var i = 0; i < selectedItems.length; i++) {
                    var s = selectedItems[i];
                    my_table.column(s).visible(1);
                    jQuery('#mytable').css('width', '100%');
                }
            },
            onCheckAll: function () {
                showallcol();
                jQuery('#mytable').css('width', '100%');
            },
            onUncheckAll: function () {
                hideallcol();
            }
        });
        
    });
</script>
@stop
@endsection
