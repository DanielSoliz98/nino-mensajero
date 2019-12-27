@extends('users.menu')
@section('title', 'Información de Personal')
@section('page-title', 'Información de Personal')
@section('user-content')
<section class="mt-1 ml-1 mr-1 mb-1"> 
    @if (count($personals) > 0)
        <div class="tablebody">
            <div class="card-header">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center">
                        <b>NOMBRE</b>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <b>CORREO</b>
                    </div>
                    <div class="col-1 d-flex justify-content-center">
                        <b>C.I.</b>
                    </div>
                    <div class="col-4 d-flex justify-content-center">
                        <b>PROFESIÓN</b>
                    </div>
                </div>
            </div>
        </div>
        @foreach($personals as $pers)
            @if ($pers->ci)
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center">
                                {{$pers->full_name}}
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                {{$pers->email}}
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                {{$pers->ci}}
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                {{$pers->profession}}
                            </div>
                        </div>
                        <a href="{{route('persProfile', $pers->id)}}" class="stretched-link"></a>
                    </div>
                </div>
            @else
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3 d-flex justify-content-center">
                                {{$pers->full_name}}
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                {{$pers->email}}
                            </div>
                            <div class="col-1 d-flex justify-content-center">
                                -
                            </div>
                            <div class="col-4 d-flex justify-content-center">
                                <span class="badge badge-warning">Personal aún no llenó sus datos.</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <div class="d-flex justify-content-center mt-2 ">
            {{ $personals->links( "pagination::bootstrap-4" ) }}
        </div>
    @else
        <div class="no-content card mt-1 color-component text-center">
            <div class="card-body">
                <h5>Aún no se registró personal.</h5>
            </div>
        </div>
    @endif
</section>
@endsection