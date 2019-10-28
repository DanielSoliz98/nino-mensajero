@extends('users.menu')
@section('title', 'Personal-Contenido-Cartas')
@section('page-title', 'Clasificación')
@section('user-content')
    <div class="container-fluid register color-component mt-1">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                
                <div class="d-flex mt-2 mb-4 table-responsive">
                    <table class="table table-striped table-md tablebody" border="1px">
                        <tr>
                            <th>CARTA</th>
                            <th>CONTENIDO</th>
                            <th>TIPO</th>
                        </tr>
                        @foreach( $letters as $letter )
                            <tr>
                            @if (in_array($tok, $blacklist))
                                <td>{{$letter->id}}</td>
                                <td>{{$letter->content}}</td>
                                <td>ATENCION</td>
                            @else
                                <td>{{$letter->id}}</td>
                                <td>{{$letter->content}}</td>
                                <td>NORMAL</td>
                            @endif
                            </tr>
                        {{-- <tr>
                            @if ( $flag == true )
                                <td>{{$letter->id}}</td>
                                <td>{{$letter->content}}</td>
                                <td>{{$tipo}}</td>
                            @else
                                <td>{{$letter->id}}</td>
                                <td>{{$letter->content}}</td>
                                <td>{{$tipo}}</td>
                            @endif
                        </tr> --}}
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('users.footer')
@endsection
@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection