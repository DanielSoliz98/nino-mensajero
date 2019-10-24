@extends('users.menu')
@section('title', 'Perfil Profesional')
@section('page-title', 'Perfil Profesional')
@section('user-content')
    <section class="container-fluid mt-1 no-content color-component">
        <br>
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex mt-2 mb-4 table-responsive">
                <table class="table table-striped table-md tablebody" border="1px">  
                    @foreach ($queryPersProfile as $profile)
                        <tr>  
                            <th>Nombre Completo:</th> 
                            <td>{{$personal->full_name}}</td>
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
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-center ">
                <a class="btn btn-light border border-dark" href="{{route('home')}}">Editar perfil</a>
            </div>
        </form>
    </section>
@endsection