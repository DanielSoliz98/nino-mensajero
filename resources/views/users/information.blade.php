@extends('users.menu')
@section('title', 'Respuesta a carta')
@section('page-title', 'Respuesta a carta')
@section('user-content')
    
<section class="container-fluid d-flex justify-content-center">
    <div class="container mt-2">
        <form enctype="multipart/form-data" method="POST">
            {!! csrf_field() !!}
            <textarea maxlength="20000" class="form-control text border-primary mt-2 writPers" onkeyup="countChar(this)" rows="10" placeholder="Respuesta a carta..." name="content" id="content"></textarea>           
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