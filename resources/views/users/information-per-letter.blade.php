@extends('users.menu')
@section('title', 'Seguimiento de carta')
@section('page-title')
    Seguimiento - Carta {{$letter->id}}
@endsection
@section('user-content')
<section>
    <div class="container">
        <div class="d-flex table-responsive">
            <table class="table color-component tablebody mt-3 ml-2 mr-2 mb-3" border="1px">
                <tr>
                    <td><b>CARTA:</b></td>
                    <td>{{$letter->content}}</td>
                </tr>
            </table>
        </div>
    </div>
    @if (count($specificInfos) > 0)
        <div class="infinite-scroll mb-2">
            <div class="tablebody">
                <div class="card-text row">
                    <div class="col-7 d-flex justify-content-center">
                        <b>INFORMACIÓN GENERADA</b>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <b>PERSONAL</b>
                    </div>
                    <div class="col-2 d-flex justify-content-center">
                        <b>FECHA</b>
                    </div>
                </div>
            </div>
            @foreach($specificInfos as $info)
                <div class="card color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8">
                                <p class="card-text">{{$info->continf}}</p>
                            </div>
                            <div class="col-2 d-flex justify-content-end">
                                {{ucfirst($info->full_name)}}
                            </div>
                            <div class="col-2 text-muted d-flex justify-content-end">
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