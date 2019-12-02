@extends('users.menu')
@section('title', 'Personal-Mi Perfil')
@section('page-title', 'Mi Perfil Profesional')
@section('user-content')
    <div class="no-content color-component mt-1 ml-1 mr-1 mb-1">
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex table-responsive">
                <table class="table table-striped table-md tablebody  mt-3 ml-2 mr-2 mb-3" border="1px"> 
                    <tr>  
                        <th>Nombre completo:</th> 
                        <td>{{$personal->full_name}}</td>
                    </tr>
                    <tr>  
                        <th>Correo electrónico:</th> 
                        <td>{{$personal->email}}</td>
                    </tr>
                    @if (count($queryPersProfile))
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
                    @else
                        <th><span class="badge badge-warning">Perfil incompleto</span></th>
                        <td><span class="badge badge-warning">Tiene que actualizar su perfil.</span></td>
                    @endif
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-center ">
                <a class="btn3" href="{{route('updateMyProfile')}}">Actualizar mi perfil</a>
            </div>
        </form>
    </div>
@endsection