
function Open_dlg_llamadas() {
    $('#dlg_llamadas').modal('show');
    $('#txt_id_llamada').val(0);
}

function llamada_edit(id_llamada) {

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST',
        url: 'get_llamada_id',
        data: {id_llamada: id_llamada},
        success: function (data) {
            $("#txt_id_llamada").val(id_llamada);
            $('#ape_com').val(data[0].ape_com);
            $('#nom_com').val(data[0].nom_com);
            $('#movil').val(data[0].movil);
            $('#fijo').val(data[0].fijo);
            $('#obs').val(data[0].obs);
            $('#id_cur').val(data[0].id_cur);
            $('#otros_cur').val(data[0].otros_cur);
            $('#fch_llamada').val(data[0].fch_llamada);
            $('#prox_fch_llamada').val(data[0].prox_fch_llamada);
            $('#id_est_llamada').val(data[0].id_est_llamada);
            $('#id_asesor').val(data[0].id_asesor);
            if (data[0].wasap == 0) {
                $("#wasap").prop("checked", false);
                $("#wasap").val(0);
            } else {
                $("#wasap").prop("checked", true);
                $("#wasap").val(1);
            }
        },
        error: function (e) {
            console.log(e);
            MensajeAlerta('Sistema', 'Ocurrio un error en el Sistema...');
        }
    });
}

function btn_guardar_llamada() {
//    return false;
    id_llamada = $('#txt_id_llamada').val();
   
    if ($('#nom_com').val() == "") {         
        mostraralertasconfoco('* El Nombre es Obligatorio', '#nom_com'); return false;        
    }
    if ($('#movil').val() == "") {         
        mostraralertasconfoco('* El Celular es Obligatorio', '#movil');  return false;      
    }
    if ($('#obs').val() == "") {         
        mostraralertasconfoco('* Observacion Obligatorio', '#obs'); return false;       
    }
    if ($('#id_cur').val() == "select") {         
        mostraralertasconfoco('* Seleccione un Curso', '#id_cur'); return false;       
    }
    if ($('#id_est_llamada').val() == "select") {         
        mostraralertasconfoco('* Seleccione Estado de Llamada', '#id_est_llamada'); return false;      
    }
    if ($('#id_asesor').val() == "select") {         
        mostraralertasconfoco('* Seleccione el Asesor', '#id_asesor'); return false;       
    }
    
    

    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'GET',
        url: 'post_llamada',
        data: {
            id: id_llamada,
            ape_com: $.trim($('#ape_com').val().toUpperCase()),
            nom_com: $.trim($('#nom_com').val().toUpperCase()),
            movil: $.trim($('#movil').val()),
            fijo: $.trim($('#fijo').val()),
            obs: $.trim($('#obs').val()),
            id_cur: $('#id_cur').val(),
            otros_cur: $.trim($('#otros_cur').val()),
            fch_llamada: $('#fch_llamada').val(),
            prox_fch_llamada: $('#prox_fch_llamada').val(),
            id_est_llamada: $('#id_est_llamada').val(),
            id_asesor: $('#id_asesor').val(),
            wasap: $("#wasap").val()
        },
        success: function (data) {
            if (data.msg == 'si') {
                $('#dlg_llamadas').modal('hide');
                fn_actualizar_grilla('tabla_call_center', 'grid_get_usuarios?buscar=' + $("#txt_buscar_llamada").val());
                MensajeExito('Llamadas', 'El registro ha sido actualizado...');
                setTimeout(function () {
                    jQuery('#tabla_call_center').jqGrid('setSelection', id_llamada);
                }, 500);
            }
        },
        error: function (e) {
            console.log(e);
            MensajeAlerta('Sistema', 'Ocurrio un error en el Sistema...');
        }
    });
}

function llamada_delete(id_llamada) {
//    setTimeout(function () {
//        id_llamada = id_ent = $('#tabla_call_center').jqGrid('getGridParam', 'selrow');
        numero = $("#tabla_call_center").getCell(id_llamada, 'movil');
        nombre = $("#tabla_call_center").getCell(id_llamada, 'nom_com');
        $.confirm({
            title: nombre +' - ' + numero,
            type: 'red',
            content: 'Esta seguro de enviar a papelera',
            buttons: {
                Aceptar: function () {
                    $.ajax({
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        type: 'GET',
                        url: 'delete_llamada?id=' + id_llamada,
                        success: function (data) {
                            if (data.msg == 'si') {
                                $('#dlg_llamadas').modal('hide');
                                fn_actualizar_grilla('tabla_call_center', 'grid_data_llamadas');
                                MensajeExito('Llamadas', 'El registro, puesto en papelera...');
                            }
                        },
                        error: function (e) {
                            console.log(e);
                            MensajeAlerta('Sistema', 'Ocurrio un error en el Sistema...');
                        }
                    });
                },
                Cancelar: function () {
                    window.close();
                }
            }
        });
//    }, 500);


}

function buscar_llamada() {
    fn_actualizar_grilla('tabla_call_center', 'grid_data_llamadas?buscar=' + $("#txt_buscar_llamada").val().toUpperCase());
}