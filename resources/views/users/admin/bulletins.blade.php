@extends('users.menu')
@section('title', 'Admin-Boletines')
@section('page-title', 'Boletines')
@section('user-content')
    <div class="mt-1 ml-1 mr-1 mb-1">
        @if (count($bulletins) > 0)
            @foreach($bulletins as $bulletin)
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-2">
                            <p class="card-text">{{$bulletin->name}}</p>
                            </div>
                            <div class="col-4">
                                <p class="card-text">{{$bulletin->description}}</p>
                            </div>
                            <div class="col-2">
                                <p class="card-text">{{$bulletin->publication_date->format('D j F Y')}}</p>
                            </div>
                            <div class="col-4 d-flex justify-content-end">
                                <div class="card-text text-muted">
                                    <form method="POST" action="{{ route('publish.bulletin', $bulletin) }}">
                                        {{ csrf_field() }}
                                        @if ($bulletin->generatedInformations()->count() == 0)
                                            <span class="badge badge-light"> 0 informaciones generadas.</span>
                                            <span class="badge badge-primary">Este boletín no está publicado.</span>
                                        @elseif ($bulletin->generatedInformations()->count() > 0)
                                            @if($bulletin->is_published == false)
                                                <span class="badge badge-primary">Este boletín no está publicado.</span>
                                                <button type="submit" class="btn btn-light border border-dark">Publicar
                                                </button>
                                            @else
                                                <span class="badge badge-light">{{$bulletin->generatedInformations()->count()}}  informaciones generadas.</span>
                                                <span class="badge badge-primary">Boletín publicado.</span>
                                            @endif
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-2 ">
                {{ $bulletins->links( "pagination::bootstrap-4" ) }}
            </div>
        @else
        <div class="no-content card mt-1 color-component text-center">
            <div class="card-body">
                <h5>No hay boletines registrados.</h5>
            </div>
        </div>
        @endif

    </div>
@endsection