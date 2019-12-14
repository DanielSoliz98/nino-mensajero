@extends('users.menu')
@section('title', 'Información de Personal')
@section('page-title', 'Información de Personal')
@section('user-content')
    <div class="no-content color-component mt-1 ml-1 mr-1 mb-1">
        @if ($personals->count() > 0)
            <form enctype="multipart/form-data" method="POST">
                <div class="d-flex table-responsive">
                    <table class="table table-striped table-md tablebody mt-3 ml-2 mr-2 mb-3" border="1px">
                        <tr>
                            <th>NOMBRE</th>
                            <th>CORREO</th>
                            <th>C.I.</th>
                            <th>PROFESIÓN</th>
                        </tr>
                        @foreach($personals as $pers)
                        <tr>
                            @if ($pers->ci)
                                <td><a href="{{route('persProfile', $pers->id)}}">{{$pers->full_name}}</a></td>
                                <td>{{$pers->email}}</td>
                                <td>{{$pers->ci}}</td>
                                <td>{{$pers->profession}}</td>
                            @else
                                <td>{{$pers->full_name}}</td>
                                <td>{{$pers->email}}</td>
                                <td></td>
                                <td><span class="badge badge-warning">Personal aún no llenó sus datos.</span></td>
                            @endif
                        </tr>
                        @endforeach
                    </table>
                </div>
            </form>
        @else
            <div class="no-content card mt-1 color-component text-center">
                <div class="card-body">
                    <h5>Aún no se registró personal.</h5>
                </div>
            </div>
        @endif
    </div>
@endsection