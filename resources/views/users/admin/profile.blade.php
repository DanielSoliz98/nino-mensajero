@extends('users.menu')
@role('admin')
    @section('title', 'Admin-Perfiles Profesionales')
    @section('page-title', 'Perfil Profesional')
@else
    @section('title', 'Personal-Mi Perfil')
    @section('page-title', 'Mi Perfil Profesional')
@endrole
@section('user-content')
    <section class="container-fluid mt-1 no-content color-component">
        <br>
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex mt-2 mb-4 table-responsive">
                <table class="table table-striped table-md tablebody" border="1px"> 
                    @if (count($queryPersProfile)>0)
                        @foreach ($queryPersProfile as $profile)
                            <tr>  
                                <th>Nombre Completo:</th> 
                                <td>{{$personal->full_name}}</td>
                            </tr>
                            <tr>  
                                <th>Correo Electrónico:</th> 
                                <td>{{$personal->email}}</td>
                            </tr>
                            <tr>
                                <th>C.I.:</th>
                                <td>{{$profile->ci}}</td>
                            </tr>
                            <tr>
                                <th>Telefono:</th>
                                <td>{{$profile->phone}}</td>
                            </tr>
                            <tr>
                                <th>Profesión:</th> 
                                <td>{{$profile->profession}}</td>
                            </tr>
                            <tr>
                                <th>Grado de formación:</th> 
                                <td>{{$profile->degree}}</td>
                            </tr>
                            <tr>
                                <th>Especialidades:</th>
                                <td>{{$profile->specialties}}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>  
                            <th>Nombre Completo:</th> 
                            <td>{{$personal->full_name}}</td>
                        </tr>
                        <tr>  
                            <th>Correo Electrónico:</th> 
                            <td>{{$personal->email}}</td>
                        </tr>
                        <tr>
                            <th><span class="badge badge-warning">Perfil Incompleto</span></th>
                            <td><span class="badge badge-warning">Tiene que actualizar su perfil.</span></td>
                        </tr>
                    @endif 
                </table>
            </div>
            @role('personal')
            <div class="d-flex align-items-center justify-content-center ">
                <a class="btn3" href="#">Actualizar Mi Perfil</a>
            </div>
            @endrole
        </form>
    </section>
@endsection