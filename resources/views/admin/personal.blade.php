@extends('templateInfo')
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('section')

<section class="container-fluid d-flex justify-content-center img-fluid slider2">
    <div class="container mt-2">
        <h2 class="text-center">
            Informacíon del personal
        </h2>
            
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex justify-content-center mt-2 mb-4 table-responsive">
                <table class="table table-sm table-striped tablebody-centered" border="1px">
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>TELÉFONO</th>
                    <th>C.I.</th>
                    <th>DIRECCIÓN</th>
                    <th>USUARIO</th>
                    <th>CONTRASEÑA</th>
                    <th>PROFESIÓN</th>
                    
                    {{-- @foreach($pers as $key => $data) --}}
                    @foreach($pers as $data)
                    <tr>  
                        {{-- <td><a href="/profileAdmin">{{$data->full_name}}</a></td>  --}}
                        <td><a href="{{route('persProfile')}}">{{$data->full_name}}</a></td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->id}}</td>
                        <td>{{$data->direction}}</td>
                        <td>{{$data->user_name}}</td>
                        <td>{{$data->password}}</td> 
                        <td>{{$data->rol_id}}</td>      
                    </tr>
                @endforeach
                </table>
            </div>
        </form>
    </div>
</section>
@endsection