@extends('users.menu')
@section('title', 'Informaciones generadas')
@section('page-title', 'Informaciones generadas')
@section('user-content')
    
{{-- <section class="justify-content-center"> --}}
    {{-- <div class="card border-dark color-component letter mt-1 ml-1 mr-1 mb-1">
        <div class="card-body">
            <p class="card-text">{{$info->content}}</p>
        </div>
        <div class="container">
            
        </div>
        <div class="card-footer text-muted text-center mt-2"> --}}
            {{-- {{$letter->created_at->diffForHumans()}} - {{$letter->created_at->format('l j \\d\\e F Y h:i:s A')}} --}}
            {{-- <div class="d-flex flex-column mt-2">
                
                    <div class="form-group d-flex justify-content-center col-md-12">
                        <div class="ml-4 btns"> --}}
                            {{-- <a class="btn btn-light border border-dark" href="{{route('generateInformation', $letter->id)}}"> --}}
                        {{-- <i class="far fa-file-alt"></i> GENERAR INFORMACIÓN</a>
                        </div>
                        <div class="ml-4 btns">
                            <a  class="btn btn-light border border-dark" href="{{route('home')}}"><i class="fas fa-times"></i> CANCELAR</a>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</section> --}}

<section class="container-fluid mt-1 no-content color-component">
    <div class="no-content color-component mt-1 ml-1 mr-1 mb-1">
        <form enctype="multipart/form-data" method="POST">
            <div class="d-flex table-responsive">
                <table class="table table-striped table-md tablebody mt-3 ml-2 mr-2 mb-3" border="1px">
                    <tr>
                        <th>#</th>
                        <th>CARTA</th>
                        <th>PERSONAL</th>
                        <th>INFORMACIÓN GENERADA</th>
                    </tr>
                    @foreach($informations as $info)
                    <tr>
                        {{-- <td><a href="{{route('persProfile', $pers->id)}}">{{$pers->full_name}}</a></td> --}}
                        <td><a href="{{route('generateInformation', $info->id)}}">{{$info->lettid}}</a></td>
                        {{-- <td>{{$info->lettid}}</td> --}}
                        <td>{{$info->contletter}}</td>
                        <td>{{$info->full_name}}</td>
                        <td>{{$info->continf}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
</section>
@endsection