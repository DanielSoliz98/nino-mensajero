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
                            <div class="col-2 col-md-2 col-lg-3 p-1">
                            <p class="card-text">{{$bulletin->name}}</p>
                            </div>
                            <div class="col-4 col-md-5 col-lg-5 p-1">
                                <p class="card-text">{{$bulletin->description}}</p>
                            </div>
                            <div class="col-3 col-md-3 col-lg-2 p-1">
                                <p class="card-text">{{$bulletin->publication_date->format('j F Y')}}</p>
                            </div>
                            <div class="col-3 col-md-2 col-lg-2 d-flex justify-content-center p-1">
                                <div class="card-text text-muted">
                                    <form method="POST" action="{{ route('publish.bulletin', $bulletin) }}">
                                        {{ csrf_field() }}
                                        @if ($bulletin->generatedInformations()->count() == 0)
                                            <div class="d-flex justify-content-center mb-1">
                                                <span class="badge badge-light"> 0 informaciones generadas.</span>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <span class="badge badge-primary">Este boletín no está publicado.</span>
                                            </div>
                                        @elseif ($bulletin->generatedInformations()->count() > 0)
                                            @if ($bulletin->generatedInformations()->count() == 1)
                                                <div class="d-flex justify-content-center mb-1">
                                                    <span class="badge badge-light"> 1 información generada.</span>
                                                </div>
                                            @else
                                                <div class="d-flex justify-content-center">
                                                    <span class="badge badge-light">{{$bulletin->generatedInformations()->count()}}  informaciones generadas.</span>
                                                </div>
                                            @endif
                                            @if($bulletin->is_published == false)
                                                <div class="d-flex justify-content-center mb-1">
                                                    <span class="badge badge-primary">Este boletín no está publicado.</span>
                                                </div>
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit" class="btn btn-light border border-dark p-1">Publicar</button>
                                                </div>
                                            @else
                                                <div class="d-flex justify-content-center">
                                                    <span class="badge badge-primary">Boletín publicado.</span>
                                                </div>
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