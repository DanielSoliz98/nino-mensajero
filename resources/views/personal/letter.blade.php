@extends('personal.menu')
@section('page-title', 'Carta de Niño')
@section('personal-content')
    <div class="card border-dark color-component">
        <div class="card-body">
            <p class="card-text">{{$letter->content}}</p>
        </div>
        @if(count($letter->images) > 0)
        <div class="card-footer container col-8">
            <h6 class="card-subtitle mb-2 text-center">Imágenes</h6>
            @foreach ($letter->images as $image)
                <img src="/storage/{{$image->filename}}" class="card-img-top mt-2 img-responsive img-thumbnail rounded" 
                alt="...">
            @endforeach
        </div>
        @endif
            
        <div class="card-footer text-muted text-center mt-2">
                {{$letter->created_at->diffForHumans()}} - {{$letter->created_at->format('l j \\d\\e F Y h:i:s A')}}
        </div>
    </div>
@endsection