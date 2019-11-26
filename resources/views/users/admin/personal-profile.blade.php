@extends('users.menu')
@section('title', 'Admin-Informacion de Personal')
@section('page-title', 'Perfil Profesional')
@section('user-content')
    <section class="container-fluid mt-1 no-content color-component">
        <br>
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex mt-2 mb-4 table-responsive">
                <table class="table table-striped table-md tablebody" border="1px"> 
                    <tr>  
                        <th>Nombre completo:</th> 
                        <td>{{$personal->full_name}}</td>
                    </tr>
                    <tr>  
                        <th>Correo electrónico:</th> 
                        <td>{{$personal->email}}</td>
                    </tr>
                    <tr>
                        <th>C.I.:</th>
                        <td>{{$queryPersProfile->ci}}</td>
                    </tr>
                    <tr>
                        <th>Teléfono:</th>
                        <td>{{$queryPersProfile->phone}}</td>
                    </tr>
                    <tr>
                        <th>Profesión(es):</th> 
                        <td>{{$queryPersProfile->profession}}</td>
                    </tr>
                    <tr>
                        <th>Grado de formación:</th> 
                        <td>{{$queryPersProfile->degree}}</td>
                    </tr>
                    <tr>
                        <th>Especialidad(es):</th>
                        <td>{{$queryPersProfile->specialties}}</td>
                    </tr>
                </table>
            </div>
        </form>
    </section>
@endsection