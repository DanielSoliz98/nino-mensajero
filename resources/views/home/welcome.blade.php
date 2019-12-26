@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('title', 'Niño Mensajero')
@section('content')
    @include('home.terms')
    <div class="container-fluid backgroud">
        <div class=" content-home d-flex align-items-center justify-content-center">
            <a href="{{route('writeLetter')}}" class="btn2"><i class="far fa-envelope"></i> Escribir mi carta</a>
            <a href="#" class="btn2"><i class="fas fa-newspaper"></i>Ver Boletines</a>
        </div>
    </div>
@endsection
@section('footer')
    @include('home.footer')
@endsection