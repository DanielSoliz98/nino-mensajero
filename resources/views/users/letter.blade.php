@extends('users.menu')
@section('title', 'Cartas de Niños')
@section('page-title')
    Carta de Niño - {{$letter->typeLetter['name']}}
@endsection
@include('users.image')
@section('user-content')
    <div class="card border-dark color-component letter mt-1 ml-1 mr-1 mb-1">
        <div class="card-body">
            <p class="card-text">{{$letter->content}}</p>
        </div>
        <div class="container">
            @if(count($letter->images) > 0)
                <h6 class="card-subtitle mb-1 text-center">Imágenes</h6>
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
            <div class="d-flex flex-column mt-2">
                @if ($letter->generatedInformations()->count() == 1)
                    <div col-4>
                        <h5><span class="badge badge-light">Existe {{$letter->generatedInformations()->count()}} información generada de esta carta. </span></h5>
                    </div>
                @elseif ($letter->generatedInformations()->count() > 1)
                    <div col-4>
                        <h5><span class="badge badge-light">Existe {{$letter->generatedInformations()->count()}} informaciones generadas de esta carta. </span></h5>
                    </div>
                @else
                    <h5><span class="badge badge-light">Esta carta no tiene informaciones generadas asociadas.</span></h5>
                @endif
                @if ($information)
                    <div col-4>
                        <h5><span class="badge badge-light">Usted ya generó información para esta carta.</span></h5>
                    </div>
                    <div class="btns">
                        <a  class="btn btn-light border border-dark" href="{{route('home')}}"><i class="fas fa-check"></i> SALIR</a>
                    </div>
                @else
                    <div class="form-group d-flex justify-content-center col-md-12">
                        <div class="ml-4 btns">
                            <a class="btn btn-light border border-dark" href="{{route('generateInformation', $letter->id)}}">
                        <i class="far fa-file-alt"></i> GENERAR INFORMACIÓN</a>
                        </div>
                        <div class="ml-4 btns">
                            <a  class="btn btn-light border border-dark" href="{{route('home')}}"><i class="fas fa-times"></i> CANCELAR</a>
                        </div>
                    </div>

                @endif
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