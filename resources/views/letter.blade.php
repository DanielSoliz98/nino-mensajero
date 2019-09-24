<script src="http://code.jquery.com/jquery-1.5.js"></script>
<script>
    function countChar(val) {
        var len = val.value.length;
        if (len >= 20000) {
            val.value = val.value.substring(0, 20000);
        } else {
            var char = 20000 - len;
            $('#charNum').text(char + ' caracteres restantes.');
        }
    };
</script>
@extends('template')
@section('section')
    <style>
        .slider{
            background: url("background.jpg");
            height: 92vh;
            background-size: cover;
            background-position: center;
        }
        .text{
            resize: none;
        }
     </style>
    <section class="container-fluid slider d-flex justify-content-center">
        <div class="container">
            <h2 class="text-center mt-2">
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
                Carta para Niño Mensajero
            </h2>
            <form action="{{route('letter.post')}}" method="POST">
                {{ csrf_field() }}
                <textarea maxlength="20000" class="form-control text form-rounded border border-primary" onkeyup="countChar(this)"rows="10"
                placeholder="Cuentanos tus experiencias..." name="content"></textarea>
                <div class="font-italic" id="charNum"></div>
                @if ($errors->has('content'))
                    <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                        Tu carta esta vacia amiguit@, escribenos algo.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if (session('mensaje'))
                    <div class="alert alert-success mt-2">
                        {{session('mensaje')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="d-flex flex-row justify-content-center mt-3">
                    <button class="btn btn-primary" type="submit">Enviar mi carta <i class="ml-2 fas fa-envelope-open-text"></i></button>
                </div>
            </form>
        </div>
    </section>
@endsection