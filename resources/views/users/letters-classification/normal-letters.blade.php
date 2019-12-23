@extends('users.menu')
@section('title', 'Cartas de peligro')
@section('page-title', 'Cartas de peligro')
@section('user-content')
<section class="mt-1 ml-1 mr-1 mb-1"> 
    <div class="mt-1 ml-1 mr-1 mb-1">
        @if (count($normals) > 0)
            @foreach($normals as $normal)
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                <p class="card-text">{{ str_limit($normal->content, 125) }}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <div class="card-text text-muted">
                                    @if(count($normal->images) == 1)
                                        <span class="badge badge-light">{{$normal->images->count()}} imagen</span>
                                    @else
                                        <span class="badge badge-light">{{$normal->images->count()}} imágenes</span>
                                    @endif
                                    {{$normal->created_at->diffForHumans()}}
                                </div>
                            </div>
                        </div>
                        <a href="{{route('user.letter.read', $normal)}}" class="stretched-link"></a>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-2 ">
                {{ $normals->links( "pagination::bootstrap-4" ) }}
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