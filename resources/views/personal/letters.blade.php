@extends('personal.menu')
@section('page-title', 'Cartas de Niños')
@section('personal-content')
    @foreach ($letters as $item)
    <div class="card mt-1 color-component">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <p class="card-text">{{ str_limit($item->content, 135) }}</p>
                </div>
                <div class="col-4">
                    <div class="card-text text-muted">
                        <span class="badge badge-light">{{$item->images->count()}} imágenes</span>
                        {{$item->created_at->format('l j F Y h:i A')}}
                    </div>
                </div>
            </div>
            <a href="#" class="stretched-link"></a>
        </div>
    </div>
    @endforeach
    <div class="container-fluid mt-1">
        {{ $letters->links("pagination::bootstrap-4") }}
    </div>
@endsection