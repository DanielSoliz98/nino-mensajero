@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('content')
    @include('letter.help')
    <section class="container-fluid slider d-flex justify-content-center">
        <div class="container mt-2">
            <h2 class="text-center">
                <img 
                    src="letter.svg" 
                    width="30" 
                    height="30" 
                    class="d-inline-block" 
                >
                BOLETINES DEL NINO MENSAJERO
            </h2>
            @foreach($bulletins as $bulletin)
            <div 
                class="card" 
                style="background-color:transparent;margin:15px;text-align:center;">
                <h3>
                    {{$bulletin->name}}
                </h3>
                {{$bulletin->description}}
            </div>
            @endforeach
        </div>
    </section>
@endsection
@section('footer')
    @include('home.footer')
@endsection