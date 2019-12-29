@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('title', 'BOLETINES')
@section('content')
    <section class="container-fluid slider d-flex justify-content-center content-home">
        <div class="container mt-2">
            <div class="d-flex bd-highlight justify-content-center">
                <div class="p-2 flex-grow-1 bd-highlight">
                    <h2 class="text-center">
                        <img 
                            src="letter.svg" 
                            width="30" 
                            height="30" 
                            class="d-inline-block" 
                        >
                        BOLETINES DEL NIÑO MENSAJERO
                    </h2>
                </div>
                <div class="p-1 bd-highlight one-layer">
                    <a class="a-btn stretched-link btn2" href="/">
                        <i class="fas fa-arrow-left"></i> 
                        Atrás
                    </a>
                </div>
            </div>
            @if ($bulletins->count() > 0)
                @foreach($bulletins as $bulletin)
                    <div style="margin:2%;">
                        <div class="bulletin-title">
                            <button class="btn1  mb-1" disabled>
                                {{$bulletin->name}}
                            </button>
                        </div>
                        <br/><br/>
                        <div 
                            class="card bulletin-content text border border-primary no-writ"
                        ><br/>
                        <ul>Descripcíon:<br/> {{$bulletin->description}}</ul>
                        <ul>Fecha de publicacíon:<br/> {{\Carbon\Carbon::parse($bulletin->created_at)->format('d/m/Y')}}</ul>
                        <ul>
                            <a href="{{route('see-generated-information',strval($bulletin->id))}}" class="btn2">
                                VER BOLETÍN
                            </a>
                        </ul>
                        </div>
                    </div><br/>
                @endforeach
            @else
            <div class="card bulletin-content d-flex justify-content-center align-items-center p-5">
                <h4>No tenemos boletines publicados del Niño Mensajero</h4>
            </div>
            @endif
        </div>
    </section>
@endsection
@section('footer')
    @include('home.footer')
@endsection