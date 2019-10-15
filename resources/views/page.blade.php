@extends('template')
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection

@section('section')
<section class="container-fluid slider d-flex justify-content-center">
    <div class="container mt-2">
        <h2 class="text-center">
            ¿Quiénes somos?
        </h2>  
        <form enctype="multipart/form-data" method="POST">
            <div class="content d-flex align-items-center justify-content-center mt-2 mb-4">
                <div class=" align-items-center justify-content-center us">
                    <p>
                        Niño Mensajero es una página para niños, que permite a los mismos escribir cartas<br>
                        y añadir diversos contenidos e imágenes en cualquier momento.<br>
                    </p><br>
                    <h3>MISIÓN</h3>
                    <P>
                        Nuestra visión es brindar un medio de interacción con niños para que ellos puedan<br>
                        dar a conocer sus ideas, pensamientos y emociones.
                    </P><br>
                    <h3>VISIÓN</h3>
                    <P>
                        Apoyar la expresión de los niños para que su voz sea escuchada y tenga un medio de<br>
                        de ayuda en cualquier circunstancia.<br>
                        Ayudar a los niños a mostrar sus ideas y a plasmarlas en cartas.<br>
                        Dar mensajes de ayuda o de apoyo para que los niños tengan un medio de educación.
                    </P>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection