
function btn_buscar_usuario(){
    fn_actualizar_grilla('tabla_usuarios', 'grid_get_usuarios?buscar=' + $("#txt_buscar_usuario").val().toUpperCase());
}

function Open_dlg_usuario() {
    $('#dlg_usuarios').modal('show');
    $('#user_id_usuario').val(0);
}

function Close_dlg_usuario() {
    $('#dlg_usuarios').modal('hide');
    $("#img-upload").attr("src", "img/avatars/male.png");
}

function user_edit(id_user){
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        type: 'POST',
        url: 'get_user_id',
        data: {id_user: id_user},
        success: function (data) {
            $("#user_id_usuario").val(id_user);
            $('#user_ape_pat').val(data[0].ape_pat);
            $('#user_ape_mat').val(data[0].ape_mat);
            $('#user_nom_com').val(data[0].nom_com);
            $('#user_usuario').val(data[0].usuario);
            $('#user_email').val(data[0].email);
            $('#user_rol').val(data[0].rol);            
            $('#user_estado').val(data[0].estado);  
        },
        error: function (e) {
            console.log(e);
            MensajeAlerta('Sistema', 'Ocurrio un error en el Sistema...');
        }
    });
}

function user_delete(id_user){
//    setTimeout(function () {
//        id_user = id_ent = $('#tabla_usuarios').jqGrid('getGridParam', 'selrow');
        usuario = $("#tabla_usuarios").getCell(id_user, 'usuario');
//        nombre = $("#tabla_usuarios").getCell(id_user, 'nom_com');
        $.confirm({
            title: 'Usuario: ' + usuario,
            type: 'red',
            content: 'Esta seguro de enviar a papelera',
            buttons: {
                Aceptar: function () {
                    $.ajax({
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        type: 'GET',
                        url: 'delete_usuario?id=' + id_user,
                        success: function (data) {
                            if (data.msg === 'si') {
                                $('#dlg_usuarios').modal('hide');
                                fn_actualizar_grilla('tabla_usuarios', 'grid_get_usuarios?buscar=' + $("#txt_buscar_usuario").val());
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

function btn_guardar_usuario() {
    
    id_user = $('#user_id_usuario').val();
    
    if ($.trim($("#user_ape_pat").val()) === "") {         
        mostraralertasconfoco('* El Apellido Paterno es obligatorio', '#user_ape_pat'); return false;        
    }
    if ($.trim($("#user_ape_mat").val()) === "") {         
        mostraralertasconfoco('* El Apellido Materno es obligatorio', '#user_ape_mat'); return false;        
    }
    if ($.trim($("#user_nom_com").val()) === "") {         
        mostraralertasconfoco('* El Campo Nombres es obligatorio', '#user_nom_com'); return false;        
    }
    if ($.trim($("#user_usuario").val()) === "") {         
        mostraralertasconfoco('* El Usuario es obligatorio', '#user_usuario'); return false;        
    }
    if ($.trim($("#user_email").val()) === "") {         
        mostraralertasconfoco('* El E-mail es obligatorio', '#user_email'); return false;        
    }
    if ($("#user_rol").val() === "0") {         
        mostraralertasconfoco('* El Rol de Usuario es obligatorio', '#user_rol'); return false;        
    }
    
    
    $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: 'insertar_nuevo_usuario',
        method: "GET",
        data:{
            id      : $.trim(id_user),
            ape_pat : $.trim($("#user_ape_pat").val().toUpperCase()),
            ape_mat : $.trim($("#user_ape_mat").val().toUpperCase()),
            nom_com : $.trim($("#user_nom_com").val().toUpperCase()),
            usuario : $.trim($("#user_usuario").val().toUpperCase()),
            email   : $.trim($("#user_email").val()),
            rol     : $("#user_rol").val(),
            estado  : $("#user_estado").val()
        },
        success: function (data) {
            if (data.msg === 'si') {
                
                fn_actualizar_grilla('tabla_usuarios', 'grid_get_usuarios?buscar=' + $("#txt_buscar_usuario").val());
                MensajeExito('Sistema', 'Operación realizada con exito...');
                setTimeout(function () {
                    jQuery('#tabla_usuarios').jqGrid('setSelection', id_user);
                }, 500);
                $('#dlg_usuarios').modal('hide');
            }else if(data.msg === 'existe'){
                mostraralertasconfoco('* El Usuario ya EXISTE...', '#user_usuario'); return false;
            }
        },
        error: function (e) {
            mostraralertas('* Error en Base de Datos.<br>* Comuniquese con el Administrador.');
        }
    });




//    var filesSelected = $("#user_cargar_foto").val();
//    if (filesSelected == '') {
//        mostraralertasconfoco('* Seleccione una Foto', 'user_cargar_foto');
//        return false;
//    }
    

}
