
function Open_dlg_llamadas(){
    $('#dlg_llamadas').modal('show');
    $('#txt_id_llamada').val(0);
}

function llamada_edit(id_llamada) {
    
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST',
        url: 'get_llamada_id',
        data: {id_llamada: id_llamada},        
        success: function(data){
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
            if(data[0].wasap==0){
                $("#wasap").prop("checked",false);  $("#wasap").val(0);
            }else{$("#wasap").prop("checked",true); $("#wasap").val(1);}
        },
        error: function(e){
            console.log(e);
            MensajeAlerta('Sistema', 'Ocurrio un error en el Sistema...');
        }
    });
}

function btn_guardar_llamada(){
//    return false;
    id_llamada = $('#txt_id_llamada').val();
    
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'GET',
        url: 'post_llamada',
        data: {
            id: id_llamada,
            ape_com:$('#ape_com').val().toUpperCase(),
            nom_com:$('#nom_com').val().toUpperCase(),
            movil:$('#movil').val(),
            fijo:$('#fijo').val(),
            obs:$('#obs').val(),
            id_cur:$('#id_cur').val(),
            otros_cur:$('#otros_cur').val(),
            fch_llamada:$('#fch_llamada').val(),
            prox_fch_llamada:$('#prox_fch_llamada').val(),
            id_est_llamada:$('#id_est_llamada').val(),
            id_asesor:$('#id_asesor').val(),
            wasap:$("#wasap").val()
        },
        success: function(data){
            if(data.msg=='si'){
                $('#dlg_llamadas').modal('hide');
                fn_actualizar_grilla('tabla_call_center','grid_data_llamadas');
                MensajeExito('Llamadas','El registro ha sido actualizado...');
                setTimeout(function(){
                    jQuery('#tabla_call_center').jqGrid('setSelection',id_llamada);
                },500);
            }            
        },
        error: function(e){
            console.log(e);
            MensajeAlerta('Sistema', 'Ocurrio un error en el Sistema...');
        }
    });
}

function llamada_delete(id_llamada){
    alert(id_llamada);
}

function buscar_llamada(){
    fn_actualizar_grilla('tabla_call_center','grid_data_llamadas?buscar='+$("#txt_buscar_llamada").val());
}