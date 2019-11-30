@extends('users.menu')
@section('title', 'Generar información')
@section('page-title', 'Generar información')
@section('user-content')
    
<section class="justify-content-center">
    <div class="card border-dark color-component letter mt-2 ml-2 mr-2 mb-2 ">
        <form enctype="multipart/form-data" method="POST">
            {!! csrf_field() !!}
            <textarea class="container form-control text border-primary mt-2" rows="14" placeholder="Respuesta a carta..." name="content" id="content"></textarea>           
            <input class="form-control" type="text" value="{{$letter->id}}" hidden name='letter_id'>
            <br>
            <div class="form-group d-flex justify-content-center col-md-12">
                <div class="ml-4 btns">
                    <button type="submit" class="btn btn-light border border-dark" id="submit"><i class="fas fa-check-double"></i> HECHO</button>
                </div>
                <div class="ml-4 btns">
                    <a  class="btn btn-light border border-dark" href="{{route('user.letter.read', $letter->id)}}"><i class="fas fa-times"></i> CANCELAR</a>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection