@extends('users.menu')
@section('title', 'Informaciones generadas')
@section('page-title', 'Informaciones generadas')
@section('user-content')
<section class="no-content mt-1 ml-1 mr-1 mb-1"> 
    @if (count($informations) > 0)
        <div class="infinite-scroll mb-2">
            <div class="tablebody">
                <div class="card-text row">
                    <div class="col-2 d-flex justify-content-center">
                        <b>ID CARTA</b>
                    </div>
                    <div class="col-8 d-flex justify-content-center">
                        <b>CONTENIDO DE CARTA</b>
                    </div>
                    <div class="col-2 d-flex justify-content-center">
                        <b>CANTIDAD DE<br>RESPUESTAS</b>
                    </div>
                </div>
            </div>
            @foreach($informations as $info)
                @if ($info->generatedInformations()->count())
                    <div class="card mt-1 color-component">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2 d-flex justi  fy-content-center">
                                    <a href="{{route('informationSpecified', $info->id)}}" class="btn btn-light border-dark"><b>{{$info->id}}</b></a>
                                </div>
                                <div class="col-8">
                                    {{str_limit($info->content,85)}}
                                </div>
                                <div class="col-2 d-flex justify-content-center">
                                    {{$info->generatedInformations()->count()}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <div class="d-flex justify-content-center mt-2 ">
                {{ $informations->links( "pagination::bootstrap-4" ) }}
            </div>
        </div>
    @else
        <div class="no-content card mt-1 color-component text-center">
            <div class="card-body">
                <h5>No hay informaciones generadas aún.</h5>
            </div>
        </div>
    @endif
</section>
@endsection