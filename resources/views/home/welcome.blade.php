@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('title', 'Niño Mensajero')
@section('content')
    @include('home.terms')
    <div class="container-fluid backgroud cero-layer">
        <div class=" content-home d-flex align-items-center justify-content-center">
            <div class="one-layer">
                <button class="btn2">    
                    <a class="a-btn stretched-link" href="{{route('writeLetter')}}">
                    <i class="far fa-envelope"></i> 
                        Escribir mi carta
                    </a>
                </button>
            </div>
            <div class="one-layer">
                <button class="btn2">
                    <a class="a-btn stretched-link" href="{{route('see-bulletins')}}">
                        <i class="fas fa-newspaper"></i>
                        Ver Boletines
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('home.footer')
@endsection