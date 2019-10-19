@extends('layout')
@section('title', 'Escribir mi Carta')
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
    @include('letter.help')
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
                <div class="font-italic" id="charNum"> 20000 caracteres restantes.</div>
                <div class="d-flex justify-content-center mt-2 mb-4">
                    <div class="dropzone mt-1" id="myDropzone">
                        <div class="dz-message">
                            Arrastra o haz clic aquí para añadir tus imágenes <i class="far fa-smile-wink"></i>,
                            <br>
                            sólo se permiten 5
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