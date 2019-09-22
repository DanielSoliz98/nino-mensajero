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
            <form>
                <div class="div d-flex justify-content-end">
                    <button class="btn btn-primary btn-lg" type="button">Ayuda <i class="far fa-question-circle"></i></button>
                </div>
                <textarea class="form-control text form-rounded border border-primary" rows="14"
                placeholder="Cuentanos tus experiencias..."></textarea>
                <div class="d-flex flex-row justify-content-center mt-3">
                    <button class="btn btn-primary  btn-lg mr-5" type="button">Anadir imagen <i class="ml-2 far fa-images"></i></button>
                    <button class="btn btn-primary btn-lg ml-5" type="submit">Enviar mi carta <i class="ml-2 fas fa-envelope-open-text"></i></button>
                </div>
            </form>
        </div>
    </section>
@endsection