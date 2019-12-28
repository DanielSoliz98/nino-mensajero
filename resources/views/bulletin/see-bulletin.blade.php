@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('title', 'BOLETINES')
@section('content')
    <section class="container-fluid slider d-flex justify-content-center content-home">
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
            <div style="margin:2%;">
                <div style="position:absolute;background:transparent;margin-left:5%;z-index:2">
                    <button class="btn2  mb-1" disabled>
                        {{$bulletin->name}}
                    </button>
                </div>
                <br/><br/>
                <div 
                    class="card" 
                    style="background-color:rgba(255, 255, 255, 0.5);text-align:center;z-index:1;align-items:center;"
                ><br/>
                <ul><h6>Descripcion:</h6> {{$bulletin->description}}</ul>
                <ul><h6>Fecha de publicacion:</h6> {{\Carbon\Carbon::parse($bulletin->created_at)->format('d/m/Y')}}</ul>
                <ul>
                    <a href="{{route('see-generated-information',strval($bulletin->id))}}" class="btn2">
                        VER BOLETIN
                    </a>
                </ul>
                </div>
            </div><br/>
            @endforeach
        </div>
    </section>
@endsection
@section('footer')
    @include('home.footer')
@endsection