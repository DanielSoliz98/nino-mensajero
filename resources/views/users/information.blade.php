@extends('users.menu')
@section('title', 'Generar información')
@section('page-title', 'Generar información')
@section('user-content')
    
<section class="justify-content-center">
    <div class="container">
        <form enctype="multipart/form-data" method="POST">
            {!! csrf_field() !!}
            <textarea class="form-control text border-primary mt-2" rows="14" placeholder="Respuesta a carta..." name="content" id="content"></textarea>           
            <input class="form-control" type="text" value="{{$letter->id}}" hidden name='letter_id'>
            <br>
            <div class="form-group d-flex justify-content-center col-md-12">
                <div class="ml-4 btns">
                    <button type="submit" class="btn3" id="submit">Hecho</button>
                </div>
                <div class="ml-4 btns">
                    <a  class="btn3" href="{{route('user.letter.read', $letter->id)}}">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection