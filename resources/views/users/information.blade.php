@extends('users.menu')
@section('title', 'Generar información')
@section('page-title', 'Generar información')
@section('user-content')
    
<section class="justify-content-center">
    <div class="card border-dark color-component letter mt-2 ml-2 mr-2 mb-2 ">
        <form enctype="multipart/form-data" method="POST" action="{{ route('saveInformation') }}">
            {!! csrf_field() !!}
            <textarea class="container form-control text border-primary mt-5" rows="14" placeholder="Respuesta a carta..." name="content" id="content"></textarea>           
            <input id="letter_id"  name='letter_id' class="form-control" type="text" value="{{$letter->id}}" hidden>
            <br>
            <div class="form-group d-flex justify-content-center col-md-12">
                <div class="ml-4 btns">
                    <button type="submit" class="btn btn-light border border-dark" id="submit"><i class="fas fa-check-double"></i> GUARDAR</button>
                </div>
                <div class="ml-4 btns">
                    <a  class="btn btn-light border border-dark" href="{{route('user.letter.read', $letter->id)}}"><i class="fas fa-times"></i> CANCELAR</a>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection