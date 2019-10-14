@extends('layout')
@section('content')
@include('personal.image')
    <div class="container-fluid">
            <div class="sidebar">
                <a class="active" href="{{route('letters')}}">Cartas de Niños</a>
                <a href="#news">News</a>
                <a href="#contact">Contact</a>
                <a href="#about">About</a>
            </div>
                
            <div class="content">
                <div class="container-fluid color-title-component text-uppercase text-center">
                    <h1>@yield('page-title')</h1>
                </div>
                @yield('personal-content')
            </div>
    </div>
@endsection