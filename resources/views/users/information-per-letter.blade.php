@extends('users.menu')
@section('title', 'Seguimiento de carta')
@section('page-title')
    Seguimiento - Carta {{$letter->id}}
@endsection
@section('user-content')
<section>
    @if (count($specificInfos) > 0)
        <div class="infinite-scroll mb-2">
            <div class="row card-header">
                <div class="col-7">
                    <b>INFORMACIÓN GENERADA</b>
                </div>
                <div class="col-3 d-flex justify-content-end">
                    <b>PERSONAL</b>
                </div>
                <div class="col-2 d-flex justify-content-center">
                    <b>FECHA</b>
                </div>
            </div>
            @foreach($specificInfos as $info)
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-7">
                                <p class="card-text">{{ str_limit($info->continf, 125) }}</p>
                            </div>
                            <div class="col-3 d-flex justify-content-end">
                                {{ucfirst($info->full_name)}}
                            </div>
                            <div class="col-2 text-muted">
                                {{$info->created_at}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
    <div class="no-content card mt-1 color-component text-center">
        <div class="card-body">
            <h5>No hay cartas para leer.</h5>
        </div>
    </div>
    @endif
</section>
@endsection