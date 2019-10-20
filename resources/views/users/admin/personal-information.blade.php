@extends('users.menu')
@section('title', 'Informacion de Personal')
@section('page-title', 'Personal de Niño Mensajero')
@include('users.admin.menu-list')
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
                    <th>C.I.</th>
                    <th>DIRECCIÓN</th>
                    <th>USUARIO</th>
                    <th>PROFESIÓN</th>
                </tr>
                @foreach($personals as $pers)
                <tr>  
                    <td><a href="{{route('persProfile', $pers)}}">{{$pers->full_name}}</a></td>
                    <td>{{$pers->email}}</td>
                    <td>{{$pers->phone}}</td>
                    <td>{{$pers->id}}</td>
                    <td>{{$pers->direction}}</td>
                    <td>{{$pers->user_name}}</td>
                    <td>{{$pers->rol_id}}</td> 
                </tr>
                @endforeach
            </table>
        </div>
    </form>
</div>
@endsection



