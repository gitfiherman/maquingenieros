@extends('webb.app_web')

@section('content_web_log_register')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-color: #1dbbc4">
                <div class="card-header" style="background: #1dbbc4;">Más Información</div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                <li style="color: red; font-weight: bold">Hay errores por corregir...!</li>
                            </ul>
                        </div>
                    @endif
                    <form id="contact-form" class="contact-form" name="contact-form" method="POST" action="{{ route('enviarcontacto2','cfb') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Nombres') }}</label>
                            <div class="col-md-6">
                                <input id="nombres" type="text" style="text-transform: uppercase" class="form-control{{$errors->has('nombres')?' is-invalid':''}}" name="nombres" value="{{old('nombres')}}" required autofocus>

                                @if ($errors->has('nombres'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>
                            <div class="col-md-6">
                                <input id="apellidos" type="text" style="text-transform: uppercase" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" name="apellidos" value="{{ old('apellidos') }}" required autofocus>

                                @if ($errors->has('apellidos'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('apellidos') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Región') }}</label>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('region') ? ' is-invalid' : '' }}" name="region" id="region">
                                    <option value="" selected="true" disabled="">REGIÓN</option>
                                    @foreach ($regiones as $reg)
                                    <option value="{{$reg->reg_id}}" {{ old('region', $reg->reg_id) == $reg->reg_id ? 'selected' : '' }} >{{$reg->reg_desc}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('region'))
                                    <span class="invalid-feedback v_error_contact" role="alert" >
                                        <strong>{{ $errors->first('region') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Área de Formación') }}</label>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('area_form') ? ' is-invalid' : '' }}" name="area_form" id="area_form">
                                    <option value="" selected="true" disabled="">Área de Formación</option>
                                    @foreach ($area_form as $af)
                                    <option value='{{$af->id}}' {{ old('area_form', $af->id) == $af->id ? 'selected' : '' }} >{{$af->desc}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('area_form'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('area_form') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Área de Trabajo') }}</label>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('area_trab') ? ' is-invalid' : '' }}" name="area_trab" id="area_trab">
                                    <option value="" selected="true" disabled="">Área de Trabajo</option>
                                    @foreach ($area_trab as $at)
                                    <option value='{{$at->id}}' {{ old('area_trab', $at->id) == $at->id ? 'selected' : '' }} >{{$at->desc}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('area_trab'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('area_trab') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Industria') }}</label>
                            <div class="col-md-6">
                                <select class="form-control{{ $errors->has('industria') ? ' is-invalid' : '' }}" name="industria" id="industria">
                                    <option value="" selected="true" disabled="">Industria</option>
                                    @foreach ($industria as $industria)
                                    <option value='{{$industria->id}}' {{ old('industria', $industria->id) == $industria->id ? 'selected' : '' }}>{{$industria->desc}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('industria'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('industria') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>
                            <div class="col-md-6">
                                <input type="text" name="telefono" value="{{old('telefono')}}" onkeypress="return soloNumeroTab(event);" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" placeholder="Telefono" maxlength="12">
                                @if ($errors->has('telefono'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required="required" placeholder="Email" maxlength="50">                                        
                                @if ($errors->has('email'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Comentarios') }}</label>
                            <div class="col-md-6">
                                <textarea name="message" id="message" required="required" class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}" rows="3" placeholder="Mensaje" maxlength="150" style="margin-top:2px">{{old('message')}}</textarea>
                                @if ($errors->has('message'))
                                <span class="invalid-feedback v_error_contact" role="alert" >
                                    <strong>{{ $errors->first('message') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>		                                   
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Mensaje') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('page-js-script-appblade')
<script type="text/javascript"> 
    
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if (exist){
        $.confirm({
            title: 'Maquingenieros',
            content: '* Revisa en correo no deseado o SPAM<br>* Pronto nos pondremos en contacto con Ud.',
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
