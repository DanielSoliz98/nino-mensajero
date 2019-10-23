@extends('users.menu')
@section('title', 'Error 401')
@section('page-title', 'No Autorizado')
@section('user-content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h1 class="display-2">Oops!</h1>
                </div>
                <div class="d-flex justify-content-center">
                    <h2 class="display-4">401 No Autorizado</h2>
                </div>
                <div class="d-flex justify-content-center">
                    <h3>Acceso permitido solo para administradores.</h3>
                </div>
            </div>
        </div>
    </div>
@endsection