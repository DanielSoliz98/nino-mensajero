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
            <h1 class="display-4 text-center mt-2">
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
                Carta para Niño Mensajero
                <img src="letter.svg" width="30" height="30" class="d-inline-block"alt="">
            </h1>
            <form action="{{route('letter.post')}}" method="POST">
                {{ csrf_field() }}
                <textarea class="form-control text form-rounded border border-primary" rows="14"
                placeholder="Cuentanos tus experiencias..." name="content"></textarea>
                <div class="d-flex flex-row justify-content-center mt-3">
                    <button class="btn btn-primary  btn-lg mr-5" type="button">Anadir imagen <i class="ml-2 far fa-images"></i></button>
                    <button class="btn btn-primary btn-lg ml-5" type="submit">Enviar mi carta <i class="ml-2 fas fa-envelope-open-text"></i></button>
                </div>
            </form>
        </div>
    </section>
@endsection