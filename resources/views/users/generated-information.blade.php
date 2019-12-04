@extends('users.menu')
@section('title', 'Información generada')
@section('page-title', 'Información generada')
@section('user-content')
<section class="container"> 
    <form enctype="multipart/form-data" method="POST">
        <div class="d-flex table-responsive">
            <table class="table table-striped table-md tablebody mt-3 ml-2 mr-2 mb-3" border="1px">
                <tr>
                    <th>ID CARTAS</th>
                    <th>CONTENIDO DE CARTAS</th>
                    <th>CANTIDAD DE <br>RESPUESTAS</th>
                </tr>
                @foreach($informations as $info)
                <tr>
                    <td><a href="{{route('informationSpecified', $info->letter_id)}}" class="btn btn-light border border-dark">{{$info->letter_id}}</a></td>
                    <td>{{$info->contlet}}</td>
                    <td>{{$info->total_info}}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </form>
</section>
@endsection