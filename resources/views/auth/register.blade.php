@extends('webb.app_web')

@section('content_web_log_register')
<div class="container" style="margin-top: 3%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-color: #1dbbc4">
                <div class="card-header" style="background: #1dbbc4;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="ape_pat" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>
                            <div class="col-md-6">
                                <input id="ape_pat" type="text" style="text-transform: uppercase" class="form-control{{ $errors->has('ape_pat') ? ' is-invalid' : '' }}" name="ape_pat" value="{{ old('ape_pat') }}" required autofocus>

                                @if ($errors->has('ape_pat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ape_pat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="ape_mat" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>
                            <div class="col-md-6">
                                <input id="ape_mat" type="text" style="text-transform: uppercase" class="form-control{{ $errors->has('ape_mat') ? ' is-invalid' : '' }}" name="ape_mat" value="{{ old('ape_mat') }}" required autofocus>

                                @if ($errors->has('ape_mat'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ape_mat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom_com" class="col-md-4 col-form-label text-md-right">{{ __('Nombres Completos') }}</label>
                            <div class="col-md-6">
                                <input id="nom_com" type="text" style="text-transform: uppercase" class="form-control{{ $errors->has('nom_com') ? ' is-invalid' : '' }}" name="nom_com" value="{{ old('nom_com') }}" required autofocus>

                                @if ($errors->has('nom_com'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom_com') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Usuario') }}</label>
                            <div class="col-md-6">
                                <input id="usuario" type="text" style="text-transform: uppercase" class="form-control{{ $errors->has('usuario') ? ' is-invalid' : '' }}" name="usuario" value="{{ old('usuario') }}" required autofocus>

                                @if ($errors->has('usuario'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('usuario') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
<!--                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>
                            <div class="col-md-6">
                                <input id="rol" type="text" style="text-transform: uppercase" class="form-control{{ $errors->has('rol') ? ' is-invalid' : '' }}" name="rol" value="{{ old('rol') }}" required autofocus>

                                @if ($errors->has('usuario'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rol') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
