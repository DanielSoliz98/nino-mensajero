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
            <h1 class="display-5 text-center mt-2">
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
                Carta para Niño Mensajero
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
            </h1>
            <form action="{{route('letter.post')}}" method="POST">
                {{ csrf_field() }}
                <div class="div d-flex justify-content-end">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#helpModal">Ayuda <i class="far fa-question-circle"></i></button>
                </div>
                <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="helpTitle">Como escribir mi carta 
                                    <img src="letter.svg" width="30" height="30">
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body font-italic">
                                <p>
                                    Hola Amiguito..!! Para escribir tu carta al "Niño Mensajero" no es necesario que nos digas tu nombre o la direccion donde vives, 
                                    solo contarnos lo que hiciste en el dia y como te sientes.
                                </p>
                                <p>
                                    Podras añadir 5 imagenes a tu carta para mostrar mejor las actividades que hiciste: 
                                    como jugar con tus amiguitos, hacer la tarea, ir al parque, etc.
                                </p>
                                <p>
                                    Niño Mensajero te respondera en la seccion "Boletin" que publicamos en la pagina.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a class="btn btn-success">Ir a Boletin</a>
                                <a href="{{route('home')}}" class="btn btn-success">Ir a Pagina Inicio</a>
                                <a class="btn btn-secondary" data-dismiss="modal">Cerrar Ayuda</a>
                            </div>
                        </div>
                    </div>
                </div>
                @if (session('mensaje'))
                <div class="alert alert-success mt-2">
                    {{session('mensaje')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <textarea maxlength="20000" class="form-control text form-rounded border border-primary mt-2" onkeyup="countChar(this)"rows="14"
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
                <div class="d-flex flex-row justify-content-center mt-3">
                    <button class="btn btn-primary  btn-lg mr-5" type="button">Anadir imagen <i class="ml-2 far fa-images"></i></button>
                    <button class="btn btn-primary btn-lg ml-5" type="submit">Enviar mi carta <i class="ml-2 fas fa-envelope-open-text"></i></button>
                </div>
            </form>
        </div>
    </section>
@endsection
