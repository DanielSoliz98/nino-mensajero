@extends('users.menu')
@section('title', 'Perfil Profesional')
@section('page-title', 'Perfil Profesional')
@include('users.admin.menu-list')
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
                    <tr>
                        <td>Tiempo de experiencia:</td>        
                        <td>{{$profile->experience}}</td>   
                    </tr>
                @endforeach
            </table>
        </div>
    </form>
</section>
@endsection