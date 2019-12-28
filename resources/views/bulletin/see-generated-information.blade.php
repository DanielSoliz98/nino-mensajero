@extends('layout')
@section('navbar')
    @include('home.navbar')
@endsection
@section('title', 'BOLETIN-'.strtoupper($bulletin->name))
@section('content')
@inject('user','App\Http\Controllers\BulletinController')
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
            
            <div 
                class="card" 
                style="background-color:transparent;margin:15px;"
            >
            <div class="card-header" style="align-items:left;background-color:rgba(255, 255, 255, 0.5)">
                <ul><h6>Descripcion:</h6> {{$bulletin->description}}</ul>
                <ul><h6>Fecha de publicacion:</h6> {{\Carbon\Carbon::parse($bulletin->created_at)->format('d/m/Y')}}</ul>
            </div>
                @foreach($informations as $information)
                <div class="card" style="margin:3%;background-color:rgba(0, 170, 228, 0.5)">
                    <ul><h6>Autor:</h6> {{$user->user($information->user_id)->full_name}}</ul>
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