@extends('users.menu')
@section('title', 'Cartas de Niños')
@section('page-title')
    Carta de Niño - {{$letter->typeLetter['name']}}
@endsection
@include('users.image')
@section('user-content')
    <div class="card border-dark color-component letter mt-2 ml-2 mr-2 mb-2">
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
            <br><br>
            <div class="d-flex justify-content-center col-md-12 ">
                <div class="ml-4 btns">
                    <a class="btn btn-light border border-dark" href="{{route('letterTreatment', $letter->id)}}"><i class="fas fa-check"></i> RECIBIR</a>
                </div>
                <div class="ml-4 btns">
                    <a  class="btn btn-light border border-dark" href="{{route('home')}}"><i class="fas fa-times"></i> CANCELAR</a>
                </div>
            </div>
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