@extends('users.menu')
@section('title', 'Informacion de Personal')
@section('page-title', 'Informacion de Personal')
@section('user-content')
    <div class="container mt-2">
        <br>
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex mt-2 mb-4 table-responsive">
                <table class="table table-striped table-md tablebody" border="1px">
                    <tr>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                        <th>TELÉFONO</th>
                        <th>PROFESIÓN</th>
                    </tr>
                    @foreach($personals as $pers)
                    <tr>
                        @if ($pers->phone)
                            <td><a href="{{route('persProfile', $pers->id)}}">{{$pers->full_name}}</a></td>
                            <td>{{$pers->email}}</td>
                            <td>{{$pers->phone}}</td>
                            <td>{{$pers->profession}}</td>
                        @else
                            <td>{{$pers->full_name}}</td>
                            <td>{{$pers->email}}</td>
                            <td></td>
                            <td>Personal aun no lleno sus datos.</td>
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
@endsection



