@extends('templateInfo')


@section('section')

<section class="container-fluid d-flex justify-content-center img-fluid slider2">
    <div class="container mt-2">
        <h2 class="text-center">
            Mi Perfil Profesional
        </h2>
            
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex justify-content-center mt-2 mb-4 table-responsive">
                <table class="table table-sm table-striped tablebody-left" border="1px">
                    
                    <tr>  
                        <td>Nombre: </td> 
                        <td></td>
                    </tr>
                    <tr>
                        <td>Profesión: </td> 
                        <td></td>
                    </tr>
                    <tr>
                        <td>Experiencia profesional: </td>
                        <td></td>
                    </tr> 
                    <tr>
                        <td>Especialidad: </td>        
                        <td></td>   
                    </tr>
                </table>
            </div>
        </form>
        <div class="content d-flex align-items-center justify-content-center">
            <a href="{{route('per')}}" class="btn3"><i class="fas fa-user-friends"></i> Personal</a></td>        
        </div>
    </div>
</section>
@endsection