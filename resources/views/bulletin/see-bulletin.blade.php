@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('content')
    @include('letter.help')
    <section class="container-fluid slider d-flex justify-content-center">
        <div class="container mt-2">
            <h2 class="text-center">
                <img src="letter.svg" width="30" height="30" class="d-inline-block" alt="">
                BOLETINES DEL NINO MENSAJERO {{count($bulletins)}}
            </h2>
        </div>
    </section>
@endsection
@section('footer')
    @include('home.footer')
@endsection