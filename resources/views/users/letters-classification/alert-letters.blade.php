@extends('users.menu')
@section('title', 'Cartas de alerta')
@section('page-title', 'Cartas de aleerta')
@section('user-content')
<section class="mt-1 ml-1 mr-1 mb-1"> 
    <div class="mt-1 ml-1 mr-1 mb-1">
        @if (count($alerts) > 0)
            @foreach($alerts as $alert)
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <p class="card-text">{{ str_limit($alert->content, 125) }}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <div class="card-text text-muted">
                                    @if(count($alert->images) == 1)
                                        <span class="badge badge-light">{{$alert->images->count()}} imagen</span>
                                    @else
                                        <span class="badge badge-light">{{$alert->images->count()}} imágenes</span>
                                    @endif
                                    {{$alert->created_at->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                        <a href="{{route('user.letter.read', $alert)}}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-2 ">
                {{$alerts->links( "pagination::bootstrap-4" )}}
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