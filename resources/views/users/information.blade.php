@extends('users.menu')
@section('title', 'Respuesta a carta')
@section('page-title', 'Respuesta a carta')
@section('user-content')
    
<section class="container-fluid d-flex justify-content-center">
    <div class="container mt-2">
        <form enctype="multipart/form-data" method="POST">
            {!! csrf_field() !!}
            <textarea class="form-control text border-primary mt-2 writPers" rows="10" placeholder="Respuesta a carta..." name="content" id="content"></textarea>           
            <input class="form-control" type="text" value="{{$letter->id}}" hidden name='letter_id'>
            <br>
            <div class="form-group d-flex justify-content-center col-md-12">
                <div class="ml-4 btns">
                    <button type="submit" class="btn3" id="submit">Hecho</button>
                </div>
                <div class="ml-4 btns">
                    <button type="submit" class="btn3" id="submit">Cancelar</button>
                </div>
                
            </div>
        </form>
    </div>
</section>
@endsection