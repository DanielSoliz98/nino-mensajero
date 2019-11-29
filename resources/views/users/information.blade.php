@extends('users.menu')
@section('title', 'Respuesta a carta')
@section('page-title', 'Respuesta a carta')
@section('user-content')
    
<section class="container-fluid d-flex justify-content-center">
    <div class="container mt-2">
        <form enctype="multipart/form-data" method="POST">
            {!! csrf_field() !!}
            <textarea maxlength="20000" class="form-control text form-rounded border border-primary mt-2 writ" onkeyup="countChar(this)" rows="10" placeholder="Respuesta a carta" name="content" id="content"></textarea>
            <div class="font-italic" id="charNum"> 20000 caracteres restantes.</div>

            {{-- <div class="d-flex justify-content-center mt-2 mb-4">
                <div class="d-flex align-items-center ml-4">
                    <button type="submit" class="btn3" id="submit"> Hecho</button>
                </div>
                <div class="d-flex align-items-center ml-4">
                    <button type="submit" class="btn3" id="submit"> Cancelar</button>
                </div>
            </div> --}}

            <div class="form-group d-flex justify-content-center col-md-12">
                    <div class="ml-4" style="padding: 0 70px 0 70px;">
                        <button type="submit" class="btn3" id="submit"> Hecho</button>
                    </div>
                    <div class="ml-4" style="padding: 0 70px 0 70px;">
                        <button type="submit" class="btn3" id="submit"> Cancelar</button>
                    </div>
            </div>
        </form>
    </div>
</section>
@endsection