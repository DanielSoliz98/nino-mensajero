@extends('users.menu')
@section('title', 'Seguimiento de carta')
@section('page-title')
    Seguimiento - Carta {{$letter->id}}
@endsection
@section('user-content')
<section class="container">
    <div class="">
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex table-responsive">
                <table class="table table-striped table-md tablebody mt-3 ml-2 mr-2 mb-3" border="1px">
                    <tr>
                        <th>CARTA: </th>
                        <td>{{$letter->content}}</td>
                    </tr>
                </table>
            </div>
            <div class="d-flex table-responsive">
                <table class="table table-striped table-md tablebody mt-3 ml-2 mr-2 mb-3" border="1px">
                    <tr>
                        <th>INFORMACIÓN GENERADA</th>
                        <th>PERSONAL</th>
                    </tr>
                    @foreach($specificInfos as $specific)
                    <tr>
                        <td>{{$specific->continf}}</td>
                        <td>{{$specific->full_name}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
</section>
@endsection