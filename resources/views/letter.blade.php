@extends('template')
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection
@section('section')
    <section class="container-fluid slider d-flex justify-content-center">
        <div class="container mt-2">
            <h2 class="text-center">
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
                Carta para Niño Mensajero
                <button class="btn2 mb-1" type="button" data-toggle="modal" data-target="#helpModal"><i class="far fa-question-circle"></i> Ayuda</button> 
            </h2>
            <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title popuptitle" id="helpTitle">
                                <img src="letter.svg" width="30" height="30">
                                Cómo escribir mi carta:
                            </h5>
                        </div>
                        <div class="modal-body popupcontent">
                            <p>
                                ¡Hola Amiguit@..!! Para escribir tu carta al "Niño Mensajero" no es necesario que nos digas tu nombre o dónde vives, 
                                solo cuéntanos lo que hiciste en el día y cómo te sientes.
                            </p>
                            <p>
                                Si deseas puedes añadir 5 imágenes a tu carta para mostrar mejor las actividades que hiciste: 
                                como jugar con tus amiguitos, hacer la tarea, ir al parque, etc.
                            </p>
                            <p>
                                Niño Mensajero recibirá tu carta y podrás ver sus futuras publicaciones en nuestra página.
                            </p>
                        </div>
                        <div class="content d-flex align-items-center justify-content-center modal-footer">
                            <a class="btn2" data-dismiss="modal"><i class="far fa-smile-beam"></i> Cerrar Ayuda</a>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{route('letter.post')}}" method="POST">
                {{ csrf_field() }}
                <textarea maxlength="20000" class="form-control text form-rounded border border-primary mt-2 writ" onkeyup="countChar(this)"rows="8"
                placeholder="Cuéntanos tus experiencias..." name="content"></textarea>
                <div class="font-italic" id="charNum"></div>
                @if ($errors->has('content'))
                    <div class="alert alert-danger mt-2" role="alert">
                        <i class="fas fa-pen-alt"></i> Tu carta está vacía amiguit@, escríbenos algo.
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
                    <button type="submit" class="btn2" type="submit"><i class="far fa-paper-plane"></i> Enviar mi carta</button>
                </div>

            </form>
            
            <div class="panel panel-primary">
                <div class="panel-body">
                    {!! Form::open(['route'=> 'file.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                    <div class="dz-message">
                        Coloca tus imágenes aquí <i class="far fa-smile-wink"></i>
                    </div>
                    <div class="dropzone-previews"></div>
                    <button type="submit" class="btn btn-success" id="submit">Cargar imagen</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    {!! Html::script('js/dropzone.js'); !!}
    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 3,
            maxFiles: 5,
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("Imagen cargada");
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
                this.on("error", function(file) {
                    myDropzone.errorMessage('Número excedido de imágenes');
                });
            }
        };
    </script>
@endsection