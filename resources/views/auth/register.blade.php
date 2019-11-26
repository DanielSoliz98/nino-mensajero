@extends('users.menu')
@section('title', 'Registrar Personal')
@section('page-title', 'Administración de Personal')
@section('user-content')
    <div class="container-fluid register color-component mt-1">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header text-center"><h2>REGISTRAR NUEVO PERSONAL</h2></div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register.personal') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }} row">
                                    <label for="full_name" class="col-md-4 control-label d-flex justify-content-end">Nombre completo</label>
            
                                    <div class="col-md-7">
                                        <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" 
                                        data-toggle="tooltip" data-placement="top" title="Por favor llene este campo." 
                                        oninvalid="this.setCustomValidity('Nombre completo es un campo requerido.')" oninput="setCustomValidity('')"required autofocus>
            
                                        @if ($errors->has('full_name'))
                                            <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                                <strong>{{ $errors->first('full_name') }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                    <label for="email" class="col-md-4 control-label d-flex justify-content-end">Correo electrónico</label>
            
                                    <div class="col-md-7">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" 
                                        data-toggle="tooltip" data-placement="top" title="Por favor llene este campo."
                                        oninvalid="this.setCustomValidity('Correo electrónico es un campo requerido.')" oninput="setCustomValidity('')" required>
            
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                                    <label for="password" class="col-md-4 control-label d-flex justify-content-end">Contraseña</label>
            
                                    <div class="col-md-7">
                                        <input id="password" type="password" class="form-control" name="password" 
                                        data-toggle="tooltip" data-placement="top" title="Por favor llene este campo."
                                        oninvalid="this.setCustomValidity('Contraseña es un campo requerido.')" oninput="setCustomValidity('')" required>
            
                                        @if ($errors->has('password'))
                                            <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 control-label d-flex justify-content-end">Confirmar contraseña</label>
            
                                    <div class="col-md-7">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                        data-toggle="tooltip" data-placement="top" title="Por favor llene este campo."
                                        oninvalid="this.setCustomValidity('Confirme su contraseña.')" oninput="setCustomValidity('')" required>
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
