<?php

Route::get('/', function () {
    return view('webb.principal');
});

//Route::get('hola', function(){return view('emails.contacto_email');});

Auth::routes();

Route::get('enviarcontacto','ContactoController@create')->name('contacto');
Route::post('enviarcontacto/{type}','ContactoController@store')->name('enviarcontacto');

Route::get('msinfo','ContactoController@mas_informacion');
Route::post('msinfo/{type}','ContactoController@store')->name('enviarcontacto2');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/nosotros',function(){
    return view('webb.nosotros');
});
Route::get('/cursos',function(){
    return view('webb.cursos');
});

///////////////CURSOS///////////////////
Route::get('/curso_caja_fuller',function(){ return view('webb.cursos.caja_fuller');});
Route::get('/curso_retroexcavadora',function(){ return view('webb.cursos.retroexcavadora');});
Route::get('/curso_volvo_fmx',function(){ return view('webb.cursos.volvo_fmx');});
Route::get('/curso_cargador_frontal',function(){ return view('webb.cursos.cargador_frontal');});
Route::get('/curso_camioneta_md',function(){ return view('webb.cursos.manejo_defensivo');});
Route::get('/curso_hexcavadora_hidraulica',function(){ return view('webb.cursos.hexcavadora_hidraulica');});
Route::get('/curso_i_shift',function(){ return view('webb.cursos.volvo_i_shift');});
Route::get('/curso_minicargador',function(){ return view('webb.cursos.minicargador');});
Route::get('/curso_montacargas',function(){ return view('webb.cursos.montacargas');});
Route::get('/curso_motoniveladora',function(){ return view('webb.cursos.motoniveladora');});
Route::get('/curso_rodillo',function(){ return view('webb.cursos.rodillo');});
Route::get('/curso_tractor_oruga',function(){ return view('webb.cursos.tractor_oruga');});
/////////////////////////////////////

//////////////////////////data  CALL CENTER ////////////////////*////////
Route::get('example',function(){return view('layouts.example');});


Route::group(['namespace' => 'local'], function()
{
   Route::get('datos_call_center','DataCallcenterController@index')->name('data_callcenter');
//   Route::post('data_llamadas','DataCallcenterController@getDataCallCenter')->name('dataCallCenterProceso');
   Route::get('grid_data_llamadas','DataCallcenterController@getDataCallCenter');
   
   Route::post('get_llamada_id','DataCallcenterController@get_llamada_id');
   Route::get('post_llamada','DataCallcenterController@save_llamada')->name('save_edit_datallamadas');
   Route::get('delete_llamada','DataCallcenterController@delete_llamada');
   
   Route::get('contactos_enviados_email','DataCallcenterController@contact_email')->name('contact_email');
   Route::get('grid_contact_email','DataCallcenterController@get_contact_emails');
   
   
   Route::get('ver_usuarios','UsuariosController@index')->name('usuarios');
   Route::get('grid_get_usuarios','UsuariosController@get_Usuarios');
   
   Route::get('insertar_nuevo_usuario','UsuariosController@insert_user');   
   Route::post('get_user_id','UsuariosController@get_user_id');
   Route::get('delete_usuario','UsuariosController@delete_usuario');
});

