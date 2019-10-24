@extends('users.menu')
@section('title', 'Perfil Profesional')
@section('page-title', 'Perfil Profesional')
@section('user-content')
    <section class="container mt-2">
        <br>
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex mt-2 mb-4 table-responsive">
                <table class="table table-striped table-md tablebody" border="1px">  
                    @foreach ($queryPersProfile as $profile)
                        <tr>  
                            <td>Nombre:</td> 
                            <td>{{$personals->full_name}}</td>
                        </tr>
                        <tr>
                            <td>C.I.</td>
                            <td>{{$personals->id}}</td>
                        </tr>
                        <tr>
                            <td>Profesión:</td> 
                            <td>{{$profile->profession}}</td>
                        </tr>
                        <tr>
                            <td>Grado de formación:</td> 
                            <td>{{$profile->degree}}</td>
                        </tr>
                        <tr>
                            <td>Especialidades:</td>
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