@extends('template')
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('section')

<section class="container-fluid slider d-flex justify-content-center img-fluid">
    <div class="container mt-2">
        <h2 class="text-center">
            Informacíon del personal
        </h2>
            
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex justify-content-center mt-2 mb-4 table-responsive">
                <table class="table table-sm table-striped" border="1px">
                    <th>Nombre Completo</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>CI</th>
                    <th>Profesión</th>
                    <th>Dirección</th>
                    @foreach($pers as $key => $data)
                    <tr>  
                        <td>{{$data->complete_name}}</td> 
                        <td>{{$data->password}}</td>  
                        <td>{{$data->email}}</td>  
                        <td>{{$data->id}}</td>
                        <td>{{$data->rol_id}}</td>   
                        <td></td>           
                    </tr>
                @endforeach
                </table>
            </div>
        </form>
    </div>
</section>
@endsection