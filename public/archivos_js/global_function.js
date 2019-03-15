var rutaglobal = 0;
function getServidorUrl()
{
    if(rutaglobal==0){rutaglobal = new Image; rutaglobal.src = '$';}
    return rutaglobal.src.slice(0,-1);
    }
function MensajeDialogLoadAjax(Dialogo,Mensaje){

    $('#'+Dialogo).parent().block({
        message: "<p class='ClassMsgBlock'><img src='"+getServidorUrl()+"img/cargando.gif' style='width: 18px;position: relative;top: -1px;'/>"+Mensaje+"</p>",
        css: { border: '2px solid #006000',background:'white',width: '62%'}
    });
}
function MensajeDialogLoadAjaxFinish(Dialogo){
     $('#'+Dialogo).parent().unblock();
}

function soloDNI(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 45 && charCode < 58) || (charCode > 36 && charCode < 41) || charCode == 9 || charCode == 8) {
        if (charCode == 190 || charCode == 191 || charCode == 84 || charCode == 78 || charCode == 40 || charCode == 37 || charCode == 46 || charCode == 110) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}
function soloNumeroTab(evt) {// con guin y slash ( - / )

    var charCode = (evt.which) ? evt.which : evt.keyCode
    if ((charCode > 44 && charCode < 58) || (charCode > 36 && charCode < 41) || charCode == 9 || charCode == 8 || charCode == 110) {
        if (charCode == 78 || charCode == 40 || charCode == 37 || charCode == 110) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}

function dialog_close(div) {
    $('#' + div).dialog("close");
}

function get_fecha_actual(input) {
    var f = new Date();
    $("#" + input).val(("0" + f.getDate()).slice(-2) + "/" + ("0" + (f.getMonth() + 1)).slice(-2) + "/" + f.getFullYear());
}

function fn_actualizar_grilla(grilla, url) {
    jQuery("#" + grilla).jqGrid('setGridParam', {
        url: url
    }).trigger('reloadGrid');

}

function fn_session_almacen(){
    $.ajax({
        url:'push_session_almacen',
        type:'GET',
        data:{cod_alm:$("#vw_home_select_almacen").val(),nom_alm:$("#vw_home_select_almacen :selected").text()},
        success: function(data){
            
        }
    });
}
function llenar_combo_almacenes(input) {
    $.ajax({
        url: 'get_all_almacenes',
        type: 'GET',
        success: function (data) {
            for (i = 0; i <= data.length - 1; i++) {
                $('#' + input).append('<option value=' + data[i].cod_alm + '>' + data[i].nom_alm + '</option>');
            }
//            $("#"+input).prop("selectedIndex", 1);
        },
        error: function (data) {
            alert(' Error al traer Tipo de Documentos');
        }
    });
}

function fn_consultar_dni() {
    tipo = $("#cb_tip_doc_1").val();
    nro_doc = ($("#txt_nro_doc").val()).trim();
    if (tipo == '02' && nro_doc != ''){
        MensajeDialogLoadAjax('dialog_new_edit_Contribuyentes', 'Realizando Busqueda en Reniec...');
        $.ajax({
            type: 'GET',
            url: 'http://py-devs.com/api/dni/' + nro_doc + '/?format=json',
            datatype: 'json',
            success: function (data) {
                $("#contrib_ape_pat").val(data.ape_paterno);
                $("#contrib_ape_mat").val(data.ape_materno);
                $("#contrib_nombres").val(data.nombres);
                MensajeDialogLoadAjaxFinish('dialog_new_edit_Contribuyentes');
            },
            error: function (data) {
                mostraralertas('* No se Encontró el DNI<br>Porfavor Ingrese los Datos Manualmente...');
                MensajeDialogLoadAjaxFinish('dialog_new_edit_Contribuyentes');
            }
        });
    } else {
        mostraralertasconfoco('* Ingrese Numero de Documento.<br>* Seleccione tipo de Documento.', '#txt_nro_doc');
        return false;
    }
}
function fn_consultar_ruc() {
    tipo = $("#cb_tip_doc_1").val();
    nro_doc = ($("#txt_nro_doc").val()).trim();
    if (nro_doc != '' && tipo == '00') {
        MensajeDialogLoadAjax('dialog_new_edit_Contribuyentes', 'Realizando Busqueda en Sunat...');
        $.ajax({
            type: 'GET',
            url: 'http://py-devs.com/api/ruc/' + nro_doc + '/?format=json',
            datatype: 'json',
            success: function (data) {
                $("#contrib_raz_soc").val(data.nombre);
                MensajeDialogLoadAjaxFinish('dialog_new_edit_Contribuyentes');
            },
            error: function (data) {
                mostraralertas('* No se Encontró el RUC<br>Porfavor Ingrese los Datos Manualmente...');
                MensajeDialogLoadAjaxFinish('dialog_new_edit_Contribuyentes');
            }
        });
    } else {
        mostraralertasconfoco('* Ingrese Numero de Documento.<br>* Seleccione tipo de Documento.', '#txt_nro_doc');
        return false;
    }
}
function formato_numero(numero, decimales, separador_decimal, separador_miles) { // v2007-08-06
    numero = parseFloat(numero);
    if (isNaN(numero)) {
        return "";
    }

    if (decimales !== undefined) {
        // Redondeamos
        numero = numero.toFixed(decimales);
    }
    // Convertimos el punto en separador_decimal
    numero = numero.toString().replace(".", separador_decimal !== undefined ? separador_decimal : ",");

    if (separador_miles) {
        // Añadimos los separadores de miles
        var miles = new RegExp("(-?[0-9]+)([0-9]{3})");
        while (miles.test(numero)) {
            numero = numero.replace(miles, "$1" + separador_miles + "$2");
        }
    }
    return numero;
}

/**********MENSAJES DEL SISTEMA*****************************************/

function foco(div)
{    $(div).focus();}
function mostraralertas(texto)
{
    $("#alertdialog").html('<p>' + texto + '</p>');
    $("#alertdialog").dialog('open');
}
var focoglobal = "";
function mostraralertasconfoco(texto, foco)
{
    $.SmartMessageBox({
            title : "Alerta del Sistema!",
            content : texto,
            buttons : '[Aceptar]'
    }, function(ButtonPressed) {
            if (ButtonPressed === "Aceptar") {
                    $(foco).focus();
            }
    });
    $("#bot1-Msg1").addClass('bg-color-green txt-color-white');
    $("#bot1-Msg1").focus();
    setTimeout(openPopup, 500);

}
function openPopup()
{
    $('body').keyup(function(e) {
    if(e.keyCode == 13) {
        $("#bot1-Msg1").trigger("click");
        $('body').off('keyup');

    }
});
}
function MensajeExito(tit,cont,dura)
{
    $.smallBox({
                    title : tit,
                    content : "<i class='fa fa-clock-o'></i> <i>"+cont+"</i>",
                    color : "#659265",
                    iconSmall : "fa fa-check fa-2x fadeInRight animated",
                    timeout : dura || 5000
            });
}
function MensajeAlerta(tit,cont,dura)
{
    $.smallBox({
                    title : tit,
                    content : "<i class='fa fa-clock-o'></i> <i>"+cont+"</i>",
                    color : "#C46A69",
                    iconSmall : "fa fa-check fa-2x fadeInRight animated",
                    timeout : dura || 5000
            });
}
function ajustar(tam, num)
{
    data = $("#" + num).val();
    if (data != "")
    {
        if (data.toString().length <= tam)
        {
            $("#" + num).val("0" + data);
            return ajustar(tam, num)
        } else
            return $("#" + num).val(data);
    }
}
