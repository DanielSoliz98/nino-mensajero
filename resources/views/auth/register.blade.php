@extends('users.menu')
@section('title', 'Registrar Personal')
@section('page-title', 'Administracion de Personal')
@section('user-content')
    <div class="container-fluid register color-component mt-1">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header text-center"><h2>REGISTRAR NUEVO PERSONAL</h2></div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
                                    <label for="name" class="col-md-4 control-label d-flex justify-content-end">Nombre Completo</label>
            
                                    <div class="col-md-7">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
            
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                    <label for="email" class="col-md-4 control-label d-flex justify-content-end">Correo Electrónico</label>
            
                                    <div class="col-md-7">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
            
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                                    <label for="password" class="col-md-4 control-label d-flex justify-content-end">Contraseña</label>
            
                                    <div class="col-md-7">
                                        <input id="password" type="password" class="form-control" name="password" required>
            
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 control-label d-flex justify-content-end">Confirmar Contraseña</label>
            
                                    <div class="col-md-7">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>
            
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4 d-flex justify-content-center">
                                        <button type="submit" class="btn3">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('users.footer')
@endsection
