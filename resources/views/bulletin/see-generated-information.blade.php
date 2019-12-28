@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('title', 'BOLETIN-'.strtoupper($bulletin->name))
@section('content')
    <section class="container-fluid slider d-flex justify-content-center">
        <div class="container mt-2">
            <h2 class="text-center">
                <img 
                    src="letter.svg" 
                    width="30" 
                    height="30" 
                    class="d-inline-block" 
                >
                {{strtoupper($bulletin->name)}}
            </h2>
            
            <div class="card gen-information-template">
                <div class="card-header gen-information-bulletin">
                    <ul><h6>Descripcion:</h6> {{$bulletin->description}}</ul>
                    <ul><h6>Fecha de publicacion:</h6> {{\Carbon\Carbon::parse($bulletin->created_at)->format('d/m/Y')}}</ul>
                </div>
                @foreach($informations as $information)
                <div class="card gen-information">
                    <ul><h6>Autor:</h6> {{$information->user()->get()[0]->full_name}}</ul>
                    <ul><h6>Informacion generada:</h6> {{$information->content}}</ul>    
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
@endsection
@section('footer')
    @include('home.footer')
@endsection