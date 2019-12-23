@extends('users.menu')
@section('title', 'Cartas de peligro')
@section('page-title', 'Cartas de peligro')
@section('user-content')
<section class="mt-1 ml-1 mr-1 mb-1"> 
    <div class="mt-1 ml-1 mr-1 mb-1">
        @if (count($types) > 0 && count($types->type_letter_id=="3") > 0)
            @foreach($types as $letter)
                @if($letter->type_letter_id == "3" && count($types->type_letter_id=="3") > 0)
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-9">
                                {{-- @if($letter->type_letter_id == "1") --}}
                                <p class="card-text">{{ str_limit($letter->content, 125) }}</p>
                                {{-- @endif --}}
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                <div class="card-text text-muted">
                                    @if(count($letter->images) == 1)
                                        <span class="badge badge-light">{{$letter->images->count()}} imagen</span>
                                    @else
                                        <span class="badge badge-light">{{$letter->images->count()}} imágenes</span>
                                    @endif
                                        {{$letter->created_at->diffForHumans()}}
                                    </div>
                            </div>
                        </div>
                        {{-- <a href="{{route('user.letter.read', $letter)}}" class="stretched-link"></a> --}}
                    </div>
                </div>
                @else 
                <div class="no-content card mt-1 color-component text-center">
                        <div class="card-body">
                            <h5>No hay cartas para leer.</h5>
                        </div>
                    </div>
                @endif
            @endforeach
            {{-- <div class="d-flex justify-content-center mt-2 ">
                {{ $letters->links( "pagination::bootstrap-4" ) }}
            </div> --}}
        @else
        {{-- <div class="no-content card mt-1 color-component text-center">
            <div class="card-body">
                <h5>No hay cartas para leer.</h5>
            </div>
        </div> --}}
        @endif

    </div>
</section>
@endsection