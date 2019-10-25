@extends('users.menu')
@section('title', 'Información de Personal')
@section('page-title', 'Información de Personal')
@section('user-content')
    <div class="container-fluid mt-1 no-content color-component">
        <br>
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex mt-2 mb-4 table-responsive">
                <table class="table table-striped table-md tablebody" border="1px">
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
    </div>
@endsection