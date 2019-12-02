@extends('users.menu')
@section('title', 'Cartas de Niños')
@section('page-title', 'Cartas de Niños')
@section('user-content')
    <div class="mt-1 ml-1 mr-1 mb-1">
        @if (count($letters) > 0)
            @foreach($letters as $letter)
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <p class="card-text">{{ str_limit($letter->content, 125) }}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <div class="card-text text-muted">
                                    @if ($letter->typeLetter['name'] == 'peligro')
                                        <span class="badge badge-danger">{{ucfirst($letter->typeLetter['name'])}}</span>
                                    @elseif ($letter->typeLetter['name'] == 'urgente')
                                        <span class="badge badge-warning">{{ucfirst($letter->typeLetter['name'])}}</span>
                                    @elseif ($letter->typeLetter['name']== 'alerta')
                                        <span class="badge badge-primary">{{ucfirst($letter->typeLetter['name'])}}</span>
                                    @else
                                        <span class="badge badge-light">{{ucfirst($letter->typeLetter['name'])}}</span>
                                    @endif
                                    @if(count($letter->images) == 1)
                                        <span class="badge badge-light">{{$letter->images->count()}} imagen</span>
                                    @else
                                        <span class="badge badge-light">{{$letter->images->count()}} imágenes</span>
                                    @endif
                                        {{$letter->created_at->diffForHumans()}}
                                    </div>
                            </div>
                        </div>
                        <a href="{{route('user.letter.read', $letter)}}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-2 ">
                {{ $letters->links( "pagination::bootstrap-4" ) }}
            </div>
        @else
        <div class="no-content card mt-1 color-component text-center">
            <div class="card-body">
                <h5>No hay cartas para leer.</h5>
            </div>
        </div>
        @endif

    </div>
@endsection
