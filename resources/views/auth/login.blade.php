@extends('layout')
@section('title', 'Niño Mensajero-Iniciar Sesión')
@section('navbar')
    @include('users.navbar')
@endsection
@section('content')
    <div class="container-fluid auth color-title-component">
            <div class="row justify-content-center py-5">
                <div class="col-md-6 py-5">
                    <div class="card">
                        <div class="card-header text-center"><h2>INICIAR SESIÓN</h2></div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                                    <label for="email" class="col-md-4 control-label d-flex justify-content-end">Correo electrónico</label>
    
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" 
                                        data-toggle="tooltip" data-placement="top" title="Por favor llene este campo." 
                                        oninvalid="this.setCustomValidity('Correo electrónico es un campo requerido.')" oninput="setCustomValidity('')"
                                        required autofocus>
                                        
                                    </div>
                                </div>
    
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                                    <label for="password" class="col-md-4 control-label d-flex justify-content-end">Contraseña</label>
    
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" 
                                        data-toggle="tooltip" data-placement="top" title="Por favor llene este campo." 
                                        oninvalid="this.setCustomValidity('Contraseña es un campo requerido.')" oninput="setCustomValidity('')" required>
    
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
    
                                <div class="form-group">
                                    <div class="col-md-12 col-md-offset-4 d-flex justify-content-center">
                                        <button type="submit" class="btn3">
                                            INGRESAR
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