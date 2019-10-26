@extends('users.menu')
@section('title', 'Error 401')
@section('page-title', 'No Autorizado')
@section('user-content')
    <div class="no-content card mt-1 color-component text-center">
        <div class="card-body">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <h1 class="display-2">Oops!</h1>
                </div>
                <div class="d-flex justify-content-center">
                    <h2 class="display-4">401 No Autorizado</h2>
                </div>
                @role('admin')
                    <div class="d-flex justify-content-center">
                        <h3>Acceso permitido sólo para personal.</h3>
                    </div>
                @else
                    <div class="d-flex justify-content-center">
                        <h3>Acceso permitido sólo para administradores.</h3>
                    </div>
                @endrole
            </div>
        </div>
    </div>
@endsection