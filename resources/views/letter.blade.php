@extends('template')
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection
@section('section')
    <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header backcolor-title">
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
    @if (session('mensaje'))
        <div class="modal fade" id="homeBackModal" tabindex="-1" role="dialog" aria-labelledby="helpTitle" aria-hidden="true" data-keyboard="false" data-backdrop="static">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header backcolor-title">
                        <h5 class="modal-title popuptitle" id="helpTitle">
                            <img src="letter.svg" width="30" height="30">
                            Envio Correcto.
                        </h5>
                    </div>
                    <div class="modal-body popupcontent">
                        <p>
                            {{session('mensaje')}}
                        </p>
                    </div>
                    <meta http-equiv="Refresh" content="5 ; URL=/" >
                </div>
            </div>
        </div>
    @endif
    <section class="container-fluid slider d-flex justify-content-center">
        <div class="container mt-2">
            <h2 class="text-center">
                <img src="letter.svg" width="30" height="30" class="d-inline-block" alt="">
                Carta para Niño Mensajero
                <button class="btn1 mb-1" type="button" data-toggle="modal" data-target="#helpModal"><i class="far fa-question-circle"></i> Ayuda</button>
            </h2>
            <form enctype="multipart/form-data" method="POST">
                {!! csrf_field() !!}
                <textarea maxlength="20000" class="form-control text form-rounded border border-primary mt-2 writ" onkeyup="countChar(this)" rows="8" placeholder="Cuéntanos tus experiencias..." name="content" id="content"></textarea>
                <div class="font-italic" id="charNum"></div>
                @if ($errors->has('content'))
                    <div class="alert alert-danger mt-2" role="alert">
                        <i class="fas fa-pen-alt"></i> Tu carta está vacía amiguit@, escríbenos algo.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <div class="dropzone mt-1" id="myDropzone">
                        <div class="dz-message">
                            Arrastra o haz clic aquí para añadir tus imágenes <i class="far fa-smile-wink"></i>,
                            <br>
                            solo se permiten 5
                        </div>
                        <div class="dropzone-previews"></div>
                    </div>
                    <div class="d-flex align-items-center ml-4">
                        <button type="submit" class="btn2" id="submit"><i class="far fa-paper-plane"></i> Enviar mi carta</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('scripts')
    {!! Html::script('js/dropzone.js'); !!}
    <script>
        Dropzone.options.myDropzone = {
            url: '{{route('letter.post')}}',
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFilesize: 3,
            maxFiles: 5,
            acceptedFiles: '.jpeg,.jpg,.png',
            addRemoveLinks: true,
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;

                submitBtn.addEventListener("click", function(e) {
                    myDropzone.processQueue();
                });

                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                    $('#content').val('');
                });

                this.on("success",
                    myDropzone.processQueue.bind(myDropzone)
                );
                
                this.on("sendingmultiple", function(data, xhr, formData) {
                    formData.append("content", jQuery("#content").val());
                    formData.append("_token", "{{ csrf_token() }}");
                });
            }
        };
    </script>
@endsection