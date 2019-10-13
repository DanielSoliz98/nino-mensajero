@extends('personal.menu')
@section('page-title', 'Carta de Niño')
@section('personal-content')
    <div class="card border-dark color-component">
        <div class="card-body">
            <p class="card-text">{{$letter->content}}</p>
        </div>
        <div class="container">
            @if(count($letter->images) > 0)
                <h6 class="card-subtitle mb-2 text-center">Imágenes</h6>
                <div class="row">
                        @foreach ($letter->images as $image)
                        <div class="col-lg-4 col-md-4 col-xs-6 mt-2">
                            <img src="/storage/{{$image->filename}}" class="card-img-top img-fluid img-thumbnail rounded" 
                            alt="...">
                        </div>
                        @endforeach
                </div>
            @endif
        </div>
        <div class="card-footer text-muted text-center mt-2">
                {{$letter->created_at->diffForHumans()}} - {{$letter->created_at->format('l j \\d\\e F Y h:i:s A')}}
        </div>
    </div>
@endsection