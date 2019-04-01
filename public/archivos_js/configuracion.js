


function open_dialog_new_edit_Usuario() {

    $("#dialog_new_edit_Usuario").dialog({
        autoOpen: false, modal: true, width: 550, show: {effect: "fade", duration: 300}, resizable: false,
        title: "<div class='widget-header'><h4>&nbsp&nbsp.: NUEVO USUARIO :.</h4></div>",
        buttons: [{
                html: "<i class='fa fa-save'></i>&nbsp; Guardar",
                "class": "btn btn-success",
                click: function () {
                    save_nuevo_usuario();
                }
            }, {
                html: "<i class='fa fa-sign-out'></i>&nbsp; Salir",
                "class": "btn btn-danger",
                click: function () {
                    $(this).dialog("close");
                }
            }],
        close: function (event, ui) {
            limpiar_form_usuario();
            foto_global = '';
        }
    }).dialog('open');
}
function dlg_Editar_Usuario() {

    $("#dialog_Editar_Usuario").dialog({
        autoOpen: false, modal: true, width: 550, show: {effect: "fade", duration: 300}, resizable: false,
        title: "<div class='widget-header'><h4>&nbsp&nbsp.: EDITAR USUARIO :.</h4></div>",
        buttons: [{
                html: "<i class='fa fa-save'></i>&nbsp; Guardar",
                "class": "btn btn-success",
                click: function () {
                    update_user();
                }
            }, {
                html: "<i class='fa fa-sign-out'></i>&nbsp; Salir",
                "class": "btn btn-danger",
                click: function () {
                    $(this).dialog("close");
                }
            }],
        close: function (event, ui) {
            limpiar_form_usuario();
        }
    }).dialog('open');

    id_user = $('#table_Usuarios').jqGrid('getGridParam', 'selrow');
    $.ajax({
        type: 'GET',
        url: 'get_datos_usuario?id=' + id_user,
        success: function (data) {
            $("#vw_usuario_txt_ape_nom_2").val(data.ape_nom);
            $("#vw_usuario_txt_dni_2").val(data.dni);
            $("#vw_usuario_txt_fch_nac_2").val(data.fch_nac);
            $("#vw_usuario_txt_usuario_2").val(data.usuario);
            $("#vw_usuario_txt_nivel_2").val(data.nivel);
//            $("#img-upload").attr('src', 'data:image/png;base64,' + data.foto);

        }, error: function (data) {
            mostraralertas('* Error base de datos... <br> * Contactese con el administrador..');
//                dialog_close('dialog_Editar_Usuario');
        }
    });
}

function save_nuevo_usuario() {

    dni = $.trim($("#vw_usuario_txt_dni").val());
    usuario = $.trim($("#vw_usuario_txt_usuario").val());

    if (dni == '' || dni.length <= 7) {
        mostraralertasconfoco('* Ingrese el Dni 8 digitos ...', 'vw_usuario_txt_dni');
        return false;
    }

    if (usuario == '' || usuario.length <= 2) {
        mostraralertasconfoco('* Ingrese un Usuario de 3 a mas caracteres...', 'vw_usuario_txt_usuario');
        return false;
    }
    pass = ($("#vw_usuario_txt_password").val()).trim();
    confir_pass = ($("#vw_usuario_txt_conf_pass").val()).trim();
    if (pass != confir_pass) {
        mostraralertasconfoco('* Las Contraseñas no Coinciden', 'vw_usuario_txt_password');
        return false;
    }
    if ($("#vw_usuario_txt_nivel") == 'select') {
        mostraralertasconfoco('* Seleccione un Nivel...', 'vw_usuario_txt_nivel');
        return false;
    }
    var filesSelected = $("#vw_usuario_cargar_foto").val();
    if (filesSelected == '') {
        mostraralertasconfoco('* Seleccione una Foto', 'vw_usuario_cargar_foto');
        return false;
    }

    if ($("#form_user").submit()) {
        dialog_close('dialog_new_edit_Usuario');
        fn_actualizar_grilla('table_Usuarios', 'list_usuarios');
    }
}
function update_user() {
    dni = $.trim($("#vw_usuario_txt_dni_2").val());
    usuario = $.trim($("#vw_usuario_txt_usuario_2").val());
//    password = $.trim($("#vw_usuario_txt_password").val());
    ape_nom = $.trim($("#vw_usuario_txt_ape_nom_2").val());
    nivel = $.trim($("#vw_usuario_txt_nivel_2").val());
    fch_nac = $.trim($("#vw_usuario_txt_fch_nac_2").val());

    if (dni == '' || dni.length <= 7) {
        mostraralertasconfoco('* Ingrese el Dni 8 digitos ...', 'vw_usuario_txt_dni');
        return false;
    }

    if (usuario == '' || usuario.length <= 2) {
        mostraralertasconfoco('* Ingrese un Usuario de 3 a mas caracteres...', 'vw_usuario_txt_usuario');
        return false;
    }
    id_user = $('#table_Usuarios').jqGrid('getGridParam', 'selrow');
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST',
        url: 'usuario_update',
        data: {id: id_user, dni: dni, usuario: usuario.toUpperCase(), ape_nom: ape_nom.toUpperCase(), nivel: nivel, fch_nac: fch_nac},
        success: function (data) {
            if (data.msg == 'si') {
                fn_actualizar_grilla('table_Usuarios', 'list_usuarios');
                dialog_close('dialog_Editar_Usuario');
            } else {
                mostraralertas('* Error al Modificar Usuario...!');
            }
        }, error: function (data) {
            mostraralertas('* Error al guardar Usuario <br> * Contactese con el administrador..');
            dialog_close('dialog_Editar_Usuario');
        }
    });
}
function cambiar_foto_usuario() {
    $("#dialog_Cambiar_Foto_Usuario").dialog({
        autoOpen: false, modal: true, width: 350, show: {effect: "fade", duration: 300}, resizable: false,
        title: "<div class='widget-header'><h4>&nbsp&nbsp.: CAMBIAR FOTO :.</h4></div>",
        buttons: [{
                html: "<i class='fa fa-save'></i>&nbsp; Guardar",
                "class": "btn btn-success",
                click: function () {
                    update_foto();
                }
            }, {
                html: "<i class='fa fa-sign-out'></i>&nbsp; Salir",
                "class": "btn btn-danger",
                click: function () {
                    $(this).dialog("close");
                }
            }],
        close: function (event, ui) {
            $("#vw_usuario_cambiar_foto_img").attr("src", "img/avatars/male.png");
            $("#user_cargar_foto").val('');
            foto_global = '';
        }
    }).dialog('open');
}

function update_foto() {

    var filesSelected = $("#user_cargar_foto").val();
    if (filesSelected == '') {
        mostraralertasconfoco('* Seleccione una Foto', 'user_cargar_foto');
        return false;
    }
    var form = new FormData($("#form_cambiar_foto")[0]);
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: 'cambiar_foto_user',
        method: "POST",
        dataType: 'json',
        data: form,
        processData: false,
        contentType: false,
        success: function (data) {
            if (data.msg == 'si') {
                dialog_close('dialog_Cambiar_Foto_Usuario');
                location.reload();
            } else {
                mostraralertas('* Error al cambiar la foto.');
            }
        },
        error: function (er) {
            mostraralertas('* Error en Base de Datos.<br>* Comuniquese con el Administrador.');
        }
    });

}
function validar_usuario(usuario) {
    if (usuario.length >= 3) {
        MensajeDialogLoadAjax('vw_usuario_txt_usuario', '.: validando ...');
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: 'usuarios_validar_user?usuario=' + usuario.toUpperCase(),
            type: 'GET',
            success: function (data) {
                MensajeDialogLoadAjaxFinish('vw_usuario_txt_usuario');
                if (data.msg == 'si') {
                    $("#vw_usuario_txt_usuario").css({border: "1px solid #FF4040"});
                    mostraralertasconfoco('* El Usuario ' + ($('#vw_usuario_txt_usuario').val()).toUpperCase() + ' Ya Existe...', 'vw_usuario_txt_usuario');
                    memory_glob_usuario = $('#vw_usuario_txt_usuario').val();
                } else if (data.msg == 'no') {
                    $("#vw_usuario_txt_usuario").css({border: "1px solid #BDBDBD"});
                }
            },
            error: function (data) {
                mostraralertas('* Error al Valida Usuario...!');
                MensajeDialogLoadAjaxFinish('vw_usuario_txt_usuario');
            }
        });
    }
}
function validar_dni(dni) {
    if (dni.length == 8) {
        MensajeDialogLoadAjax('vw_usuario_txt_dni', '.: validando ...');
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: 'usuarios_validar_dni?dni=' + dni,
            type: 'GET',
            success: function (data) {
                MensajeDialogLoadAjaxFinish('vw_usuario_txt_dni');
                if (data.msg == 'si') {
                    $("#vw_usuario_txt_dni").css({border: "1px solid #FF4040"});
                    mostraralertasconfoco('* El Dni ' + $('#vw_usuario_txt_dni').val() + ' Ya Existe...', 'vw_usuario_txt_dni');
                    memory_glob_dni = $('#vw_usuario_txt_dni').val();
                } else if (data.msg == 'no') {
                    $("#vw_usuario_txt_dni").css({border: "1px solid #BDBDBD"});
                }
            },
            error: function (data) {
                mostraralertas('* Error al Valida Dni...!');
                MensajeDialogLoadAjaxFinish('vw_usuario_txt_dni');
            }
        });
    }
}

function limpiar_form_usuario() {
    $("#vw_usuario_txt_ape_nom").val('');
    $("#img-upload").attr("src", "img/avatars/male.png");
    $("#vw_usuario_cargar_foto").val("");
    $("#vw_usuario_txt_dni").val('');
    $("#vw_usuario_txt_fch_nac").val('');
    $("#vw_usuario_txt_usuario").val('');
    $("#vw_usuario_txt_password").val('');
    $("#vw_usuario_txt_conf_pass").val('');
    $("#vw_usuario_txt_nivel").val('select');
    $("#vw_usuario_txt_dni").css({border: "1px solid #BDBDBD"});
    $("#vw_usuario_txt_usuario").css({border: "1px solid #BDBDBD"});
}

function eliminar_usuario() {
    id=$('#table_Usuarios').jqGrid ('getGridParam', 'selrow');
    $.confirm({
        title: '.:Cuidado... !',
        content: 'Los Cambios no se podran revertir...',
        buttons: {
            Confirmar: function () {
                $.ajax({
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    url: 'usuario_delete',
                    data: {id: id},
                    success: function (data) {
                        fn_actualizar_grilla('table_Usuarios','list_usuarios');
                        dialog_close('dialog_new_edit_Usuario');                        
                    }, error: function (data) {
                        dialog_close('dialog_new_edit_Usuario');
                        MensajeAlerta('* Error.', 'Contactese con el Administrador.');
                    }
                });
            },
            Cancelar: function () {
                MensajeAlerta('Eliminar Usuario..', 'Operacion Cancelada.');
            }
        }
    });


}