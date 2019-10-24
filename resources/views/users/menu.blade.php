@extends('layout')
@section('navbar')
    @include('users.navbar')
@endsection
@section('content')
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading title-left">
                @role('admin')
                MENÚ DE ADMINISTRADOR
                @else
                MENÚ DE PERSONAL
                @endrole
            </div>
            <div class="list-group list-group-flush">
                    <a href="{{route('home')}}" class="list-group-item list-group-item-action bg-light">Cartas de Niños</a>
                @role('admin')
                <a href="{{route('register')}}" class="list-group-item list-group-item-action bg-light">Registrar Nuevo Personal</a>
                    <a href="{{route('admin.personal')}}" class="list-group-item list-group-item-action bg-light">Información de Personal</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Informaciones Generadas</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Boletines</a>
                @else
                    <a href="#" class="list-group-item list-group-item-action bg-light">Información Generada</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Notificaciones</a>
                @endrole
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="content-fluid">
                <div class="container-fluid color-title-component text-uppercase text-center">
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-light border border-dark" id="menu-toggle"><i class="fas fa-bars"></i> Menú</a>
                        <h1>@yield('page-title')</h1>
                        <a  class="btn btn-light border border-dark" href="{{ URL::previous() }}"><i class="fas fa-arrow-left"></i> Atrás</a>
                    </div>
                </div>
                @yield('user-content')
            </div>
        </div>
    </div>
    <script>
        $("#menu-toggle").click(function(e) {
            $("#wrapper").toggleClass("toggled");
        });
    </script>
@endsection
@section('footer')
    @include('users.footer')
@endsection
