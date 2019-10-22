@extends('users.menu')
@section('title', 'Perfiles Profesional')
@section('page-title', 'Perfiles Profesionales')
@include('users.admin.menu-list')
@section('user-content')

<section class="container mt-2">
    <br>
    <form enctype="multipart/form-data" method="POST">
        <div class="d-flex mt-2 mb-4 table-responsive">
            <table class="table table-striped table-md tablebody" border="1px">  
                <th>PROFESIÓN</th>
                <th>GRADO DE FORMACIÓN</th>
                <th>TIEMPO DE EXPERIENCIA</th>
                @foreach ($specialists as $specialist)
                    <tr> 
                        <td>{{$specialist->profession}}</td>
                        <td>{{$specialist->degree}}</td>       
                        <td>{{$specialist->experience}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </form>
</section>
@endsection