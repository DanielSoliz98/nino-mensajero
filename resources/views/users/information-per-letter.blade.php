@extends('users.menu')
@section('title', 'Seguimiento de carta')
@section('page-title')
    Seguimiento - Carta {{$letter->id}}
@endsection
@section('user-content')
<section class="mt-1 ml-1 mr-1 mb-1">
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
                <div class="card-header"> 
                    <div class="row">
                        <div class="col-5 col-lg-5 d-flex justify-content-center">
                            <b>INFORMACIÓN GENERADA</b>
                        </div>
                        <div class="col-1 col-lg-2 d-flex justify-content-center">
                            <b>AUTOR</b>
                        </div>
                        <div class="col-2 col-lg-2 d-flex justify-content-center">
                            <b>FECHA</b>
                        </div>
                        <div class="col-4 col-lg-3 d-flex justify-content-center">
                            <b>BOLETIN</b>
                        </div>
                    </div>
                </div>
            </div>
            @foreach($specificInfos as $info)
                <div class="card mt-1 color-component">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-lg-5">
                                <p class="card-text">{{$info->continf}}</p>
                            </div>
                            <div class="col-1 col-lg-2 d-flex justify-content-center">
                                {{ucfirst($info->full_name)}}
                            </div>
                            <div class="col-2 col-lg-2 text-muted d-flex justify-content-center">
                                {{$info->created_at}}
                            </div>
                            <div class="col-4 col-lg-3 d-flex justify-content-center">
                                @if ($info->name !== null)
                                    <div class="bulletin-name">{{$info->name}}</div>
                                @else
                                    @role('admin')
                                        <form class="col-12 col-md-10 col-lg-12" method="POST" action="{{ route('updateInformation', $info->id) }}">
                                            {{csrf_field()}}
                                            <select name="bulletins" id="bulletins" class="form-control selectpicker"
                                            data-toggle="tooltip">
                                                <option value="" selected disabled hidden>Seleccione boletín</option>
                                                @if ($bulletins->count() > 0)
                                                    @foreach ($bulletins as $item)
                                                        @if (!$item->is_published)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <option value="" disabled>No hay boletines disponibles.</option> 
                                                @endif
                                            </select>
                                            <div class="d-flex align-items-center justify-content-center mt-2">
                                                <button type="submit" class="btn btn-light border border-dark"><i class="fas fa-plus-circle"></i>Incluir</button>
                                            </div>
                                        </form>
                                    @else
                                        Aún no integrado a boletín.
                                    @endrole
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="no-content card mt-1 color-component text-center">
            <div class="card-body">
                <h5>No hay informaciones generadas de ésta carta.</h5>
            </div>
        </div>
    @endif
</section>
@endsection