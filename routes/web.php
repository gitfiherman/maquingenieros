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


//////////////////////////data  CALL CENTER ////////////////////*////////
Route::get('example',function(){return view('layouts.example');});


Route::group(['namespace' => 'local'], function()
{
   Route::get('datos_call_center','DataCallcenterController@index')->name('data_callcenter');
//   Route::post('data_llamadas','DataCallcenterController@getDataCallCenter')->name('dataCallCenterProceso');
   Route::get('grid_data_llamadas','DataCallcenterController@getDataCallCenter');
   
   Route::post('get_llamada_id','DataCallcenterController@get_llamada_id');
   Route::get('post_llamada','DataCallcenterController@save_llamada')->name('save_edit_datallamadas');
   
});

