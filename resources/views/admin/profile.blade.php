@extends('template')

@section('section')

<section class="container-fluid d-flex justify-content-center img-fluid slider2">
    <div class="container mt-2">
        <h2 class="text-center">Perfil Profesional</h2>
            
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex justify-content-center mt-2 mb-4 table-responsive">
                <table class="table table-sm table-striped tablebody-left" border="1px">  
                    @foreach ($queryPersProfile as $profile)
                        <tr>  
                            <td>Nombre: </td> 
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
                            <td>Habilidades: </td>
                            <td>{{$profile->skills}}</td>
                        </tr> 
                        <tr>
                            <td>Tiempo de experiencia:</td>        
                            <td>{{$profile->experience}}</td>   
                        </tr>
                    @endforeach
                </table>
            </div>
        </form>
        <div class="content d-flex align-items-center justify-content-center">
            <a href="{{route('personal')}}" class="btn3"><i class="fas fa-user-friends"></i> Personal</a></td>        
        </div>
    </div>
</section>
@endsection

