@extends('users.menu')
@section('title', 'Cartas de Niños')
@section('page-title', 'Carta de Niño')
@include('users.personal.menu-list')
@include('users.personal.image')
@section('user-content')
    <div class="card border-dark color-component mt-2 ml-2 mr-2 mb-2">
        <div class="card-body">
            <p class="card-text">{{$letter->content}}</p>
        </div>
        <div class="container">
            @if(count($letter->images) > 0)
                <h6 class="card-subtitle mb-2 text-center">Imágenes</h6>
                <div class="row">
                        @foreach ($letter->images as $image)
                        <div class="col-lg-4 col-md-4 col-xs-6 mt-2">
                            <a>
                                <img src="/storage/{{$image->filename}}" class="card-img-top img-fluid img-thumbnail rounded" 
                                alt="">
                            </a>
                        </div>
                        @endforeach
                </div>
            @endif
        </div>
        <div class="card-footer text-muted text-center mt-2">
                {{$letter->created_at->diffForHumans()}} - {{$letter->created_at->format('l j \\d\\e F Y h:i:s A')}}
        </div>
    </div>
    <script>
        $(window).load(function(){
            $('img').on('click', function(){
                var src = $(this).attr('src');
                $("#image").attr('src', src);
                $("#modalImage").modal('show');
            });
        });
    </script>
@endsection