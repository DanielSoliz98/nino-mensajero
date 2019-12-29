@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('title', 'BOLETIN-'.strtoupper($bulletin->name))
@section('content')
    <section class="container-fluid slider d-flex justify-content-center content-home">
        <div class="container mt-2 ">
            <h2 class="text-center">
                <img 
                    src="letter.svg" 
                    width="30" 
                    height="30" 
                    class="d-inline-block" 
                >
                {{strtoupper($bulletin->name)}}
            </h2>
            
            <div class="card gen-information-template ">
                <div class="card-header gen-information-bulletin text border border-primary no-writ">
                    <ul>Descripcion: <br/> {{$bulletin->description}}</ul>
                    <ul>Fecha de publicacion:<br/> {{\Carbon\Carbon::parse($bulletin->created_at)->format('d/m/Y')}}</ul>
                </div>
                @foreach($informations as $information)
                <div class="card gen-information text border border-primary no-writ">
                    <ul>Autor:<br/> {{$information->user()->get()[0]->full_name}}</ul>
                    <ul>Informacion generada:<br/> {{$information->content}}</ul>    
                </div>
                @endforeach
            </div>
            
        </div>
    </section>
@endsection
@section('footer')
    @include('home.footer')
@endsection