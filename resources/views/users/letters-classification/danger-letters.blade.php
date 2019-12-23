@extends('users.menu')
@section('title', 'Cartas de peligro')
@section('page-title', 'Cartas de peligro')
@section('user-content')
<section class="mt-1 ml-1 mr-1 mb-1"> 
    {{-- @if (count($informations) > 0)
        <div class="tablebody">
            <div class="card-header">
                <div class="row">
                    <div class="col-2 d-flex justify-content-center">
                        <b>ID CARTA</b>
                    </div>
                    <div class="col-8 d-flex justify-content-center">
                        <b>CONTENIDO DE CARTA</b>
                    </div>
                    <div class="col-2 d-flex justify-content-center">
                        <b>CANTIDAD DE INFORMACIONES</b>
                    </div>
                </div>
            </div>
        </div>
        @foreach($informations as $info)
            @if ($info->generatedInformations()->count())
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 d-flex justify-content-center">
                                <a href="{{route('informationSpecified', $info->id)}}"><b>{{$info->id}}</b></a>
                            </div>
                            <div class="col-8">
                                {{str_limit($info->content, 85)}}
                            </div>
                            <div class="col-2 d-flex justify-content-center">
                                {{$info->generatedInformations()->count()}}
                            </div>
                        </div>
                        <a href="{{route('informationSpecified', $info->id)}}" class="stretched-link"></a>
                    </div>
                </div>
            @endif
        @endforeach
        <div class="d-flex justify-content-center mt-2 ">
            {{ $informations->links( "pagination::bootstrap-4" ) }}
        </div>
    @else
        <div class="no-content card mt-1 color-component text-center">
            <div class="card-body">
                <h5>No hay informaciones generadas aún.</h5>
            </div>
        </div>
    @endif --}}
    <div class="mt-1 ml-1 mr-1 mb-1">
        @if (count($types) > 0)
            @foreach($types as $type)
                {{-- <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <p class="card-text">{{ str_limit($type->content, 125) }}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <div class="card-text text-muted">
                                    @if(count($type->images) == 1)
                                        <span class="badge badge-light">{{$type->images->count()}} imagen</span>
                                    @else
                                        <span class="badge badge-light">{{$type->images->count()}} imágenes</span>
                                    @endif
                                        {{$type->created_at->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                        <a href="{{route('user.letter.read', $type)}}" class="stretched-link"></a>
                    </div>
                </div> --}}
                {{-- <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <p class="card-text">{{ str_limit($type->content, 125) }}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <div class="card-text text-muted">
                                    @if(count($type->images) == 1)
                                        <span class="badge badge-light">{{$type->images->count()}} imagen</span>
                                    @else
                                        <span class="badge badge-light">{{$type->images->count()}} imágenes</span>
                                    @endif
                                        {{$type->created_at->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                        <a href="{{route('user.letter.read', $type)}}" class="stretched-link"></a>
                    </div>
                </div> --}}
                {{-- @if($type->type_letter_id == "1") --}}
                <p class="card-text">{{ str_limit($type->content, 125) }}</p>
                {{-- <span class="badge badge-light">{{$type->images->count()}} imagen</span> --}}
                {{-- @elseif($type->type_letter_id == "4")
                <p class="card-text">{{ str_limit($type->content, 125) }}</p>
                <span class="badge badge-light">{{$type->images->count()}} imagen</span>
                @endif  --}}
            @endforeach
            <div class="d-flex justify-content-center mt-2 ">
                {{-- {{ $types->links( "pagination::bootstrap-4" ) }} --}}
            </div>
        @else
        <div class="no-content card mt-1 color-component text-center">
            <div class="card-body">
                <h5>No hay cartas para leer.</h5>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection