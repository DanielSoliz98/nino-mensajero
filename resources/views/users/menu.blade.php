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
                    <a href="{{route('home')}}" class="list-group-item list-group-item-action bg-light">Cartas de niños</a>
                @role('admin')
                    <a href="{{route('register')}}" class="list-group-item list-group-item-action bg-light">Registrar nuevo personal</a>
                    <a href="{{route('admin.personal')}}" class="list-group-item list-group-item-action bg-light">Información de personal</a>
                    <a href="{{route('shareInformation')}}" class="list-group-item list-group-item-action bg-light">Informaciones generadas</a>
                    <a href="{{route('register.bulletin')}}" class="list-group-item list-group-item-action bg-light">Registrar nuevo boletín</a>
                    <a href="{{route('bulletins')}}" class="list-group-item list-group-item-action bg-light">Boletines</a>
                @else
                    <a href="{{route('shareInformation')}}" class="list-group-item list-group-item-action bg-light">Informaciones generadas</a>
                @endrole
                <div class="sidebar-heading title-left">CATEGORÍAS</div>
                {{-- <a href="{{route('classifiedLetters', 1)}}" class="list-group-item list-group-item-action bg-light">Cartas de peligro</a>
                <a href="{{route('classifiedLetters', 2)}}" class="list-group-item list-group-item-action bg-light">Cartas de urgencia</a>
                <a href="{{route('classifiedLetters', 3)}}" class="list-group-item list-group-item-action bg-light">Cartas de alerta</a>
                <a href="{{route('classifiedLetters', 4)}}" class="list-group-item list-group-item-action bg-light">Cartas normales</a> --}}

                {{-- <select id="type_letter_id" name="type_letter_id" class="form-control selectpicker" 
                required data-toggle="tooltip" data-placement="top" title="Seleccione categoría.">
                    <option @if ($profile[0]->degree=="Egresado")selected @endif>Egresado</option>
                   
                    <option value="{{route('classifiedLetters', 1)}}"> q</option>
                    <option value="{{route('classifiedLetters', 2)}}">22</option>
                    <option value="3"> "{{route('classifiedLetters', 3)}}">Cartas de alerta</option>
                    <option value="4"> "{{route('classifiedLetters', 4)}}">Cartas normales</option>
                </select> --}}
                
                
                    <div class="list-group-item list-group-item-action bg-light">
                        <div class="dropdown">
                            <a class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categorías
                            </a>
                            <div class="dropdown-menu text-center" aria-labelledby="dropdownMenuLink">
                                <a class="" href="{{route('classifiedLetters', 1)}}">Peligro</a>
                                <div class="dropdown-divider"></div>
                                <a class="" href="{{route('classifiedLetters', 2)}}">Urgente</a>
                                <div class="dropdown-divider"></div>
                                <a class="" href="{{route('classifiedLetters', 3)}}">Alerta</a>
                                <div class="dropdown-divider"></div>
                                <a class="" href="{{route('classifiedLetters', 4)}}">Normal</a>
                            </div>
                        </div>
                    </div>
                {{-- //// --}}
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