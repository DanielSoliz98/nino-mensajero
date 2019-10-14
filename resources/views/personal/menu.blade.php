@extends('layout')
@section('content')
@include('personal.image')
    <div class="d-flex" id="wrapper">
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Personal - Menu</div>
            <div class="list-group list-group-flush">
                <a href="{{route('letters')}}" class="list-group-item list-group-item-action bg-light">Cartas de Niños</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
            </div>
        </div>

        <div id="page-content-wrapper">
            <div class="content-fluid">
                <div class="container-fluid color-title-component text-uppercase text-center">
                    <div class="d-flex justify-content-between align-items-center">
                        <a class="btn btn-light border border-dark" id="menu-toggle">Menu</a>
                        <h1>@yield('page-title')</h1>
                        <a  class="btn btn-light border border-dark" href="{{ URL::previous() }}">Atras</a>
                    </div>
                </div>
                @yield('personal-content')
            </div>
        </div>
    </div>
    <script>
        $("#menu-toggle").click(function(e) {
            $("#wrapper").toggleClass("toggled");
        });
    </script>
@endsection