@extends('app_welcome')

@section('content_webb')

<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">

<style type="text/css">
    body {
        height: 100%;
        background: url(plantilla/images/home/web1.jpg) no-repeat center top;
        background-attachment: fixed;
        background-size: cover;
        /*background-color: #669999;*/
        /*color: white;*/
    }  
</style>

<div id="contact" style="color: white">           
    <div class="container">
        <div class="section-title">
            <h1>Contacto</h1>
        </div>
        <div class="row">
            <div class="col-sm-6">                        
                <div class="contact-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <li style="color: red; font-weight: bold">Hay errores por corregir...!</li>
                            </ul>
                        </div>
                    @endif
                    <form id="contact-form" class="contact-form" name="contact-form" method="POST" action="{{ route('enviarcontacto','cwb') }}">
                        @csrf

                        <div class="row">
                            <div class="form-group col-sm-12 offset-2">
                                <label>Nombres</label>
                                <input type="text" name="nombres" id="nombres" value="{{old('nombres')}}" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" required="required" placeholder="Nombres" maxlength="50">
                                @if ($errors->has('nombres'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-sm-12">
                                <label>Apellidos</label>
                                <input type="text" name="apellidos" id="apellidos" value="{{old('apellidos')}}" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" required="required" placeholder="Apellidos" maxlength="50">                                        
                                @if ($errors->has('apellidos'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('apellidos') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group col-sm-12" >
                                <label class="">Región</label>
                                <select class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region">
                                    <option value="" selected="" disabled="">REGIÓN</option>
                                    @foreach ($regiones as $reg)
                                    <option value='{{$reg->reg_id}}'>{{$reg->reg_desc}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('region'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('region') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group col-sm-12" >
                                <label class="">Área de Formación</label>
                                <select class="form-control{{ $errors->has('area_form') ? ' is-invalid' : '' }}" name="area_form" id="area_form">
                                    <option value="" selected="" disabled="">Área de Formación</option>
                                    @foreach ($area_form as $af)
                                    <option value='{{$af->id}}'>{{$af->desc}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('area_form'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('area_form') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group col-sm-12" >
                                <label class="">Área de Trabajo</label>
                                <select class="form-control{{ $errors->has('area_trab') ? ' is-invalid' : '' }}" name="area_trab" id="area_trab">
                                    <option value="" selected="" disabled="">Área de Trabajo</option>
                                    @foreach ($area_trab as $at)
                                    <option value='{{$at->id}}'>{{$at->desc}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('area_trab'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('area_trab') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group col-sm-12" >
                                <label class="">Industria</label>
                                <select class="form-control{{ $errors->has('industria') ? ' is-invalid' : '' }}" name="industria" id="industria">
                                    <option value="" selected="" disabled="">Industria</option>
                                    @foreach ($industria as $industria)
                                    <option value='{{$industria->id}}'>{{$industria->desc}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('industria'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('industria') }}</strong>
                                </span>
                                @endif
                            </div>

                            <div class="form-group col-sm-12"> 
                                <label class="">Telefono</label>
                                <input type="text" name="telefono" value="{{old('telefono')}}" onkeypress="return soloNumeroTab(event);" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" placeholder="Telefono" maxlength="12">
                                @if ($errors->has('telefono'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="">Email</label>
                                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required="required" placeholder="Email" maxlength="50">                                        
                                @if ($errors->has('email'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="form-group col-sm-12">
                                <label class="">Comentarios</label>
                                <textarea name="message" id="message" required="required" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" rows="3" placeholder="Mensaje" maxlength="150" style="margin-top:2px">{{old('message')}}</textarea>
                                @if ($errors->has('message'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                                @endif
                            </div> 
                        </div>				                                   
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                        </div>
                    </form>	
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row contact-details">
                    <div class="col-sm-12">
                        <span><i class="fa fa-map-marker"></i></span>
                        <p class="v_contact" >Av.Cayma 608 ofic. 311 - CAYMA</p>
                    </div>
                    <div class="col-sm-12">
                        <span><i class="fa fa-phone"></i></span>
                        <p class="v_contact" style="font-weight:bold">957327305 - 942151138</p>
                    </div>
                    <div class="col-sm-12">
                        <span><i class="fa fa-envelope"></i></span>
                        <a class="v_contact"  href="#">informes@maquingenieros.com</a>
                    </div>
                    <div class="col-sm-12" style="margin-top:10px">

                        
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.7602469823003!2d-71.50904047080348!3d-16.422744599291445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91424b166a41945d%3A0xf52e523e762b7d00!2s34C+818%2C+Arequipa+04009!5e0!3m2!1ses!2spe!4v1558969809907!5m2!1ses!2spe" width="500" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#Contact--> 

@section('page-js-script-web')
<script type="text/javascript">
    $("#menu_principal_contacto").addClass('active');
    
    $(document).ready(function(){
        
    });

    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if (exist){
        $.confirm({
            title: 'Gracias por contactarnos',
            content: '* Tus información ah sido recibida...<br>* Pronto nos pondremos en contacto con Ud.',
            autoClose: 'logoutUser|10000',
            buttons: {
                logoutUser: {
                    text: 'Cerrando...',
                    action: function () {
                        window.close();
                    }
                },
                cerrar: function () {
                    window.close();
                }
            }
        });
    }
</script>
@stop

@endsection