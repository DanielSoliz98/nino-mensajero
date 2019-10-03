@extends('template')
@section('section')
<div class="container-fluid backgroud">
    <div class=" content-home d-flex align-items-center justify-content-center">
        <a href="{{route('writeLetter')}}" class="btn2"><i class="far fa-envelope"></i> Escribir mi carta</a>
    </div>
</div>
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsUse" 
     aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header backcolor">
            <h5 class="modal-title popuptitle" id="termsUse">Terminos de Uso - Niño Mensajero</h5>
        </div>
        <div class="modal-body popupcontent">
            <p>La pagina Niño Mensajero es solo para niños entre seis (6) y doce (12) años de edad.</p>
            <p>Niño Mensajero mantendra en secreto tu informacion personal.</p>
            <p>Haciendo clic en "Acepto los terminos", estarias de acuerdo con nuestras reglas de privacidad, podras enviar cartas y ver nuestro Boletin.</p>
        </div>
        <div class="modal-footer">
            <button onclick="location.href = 'https://www.google.com';" type="button" class="btn2" data-dismiss="modal">Salir</button>
            <button type="button" class="btn2" data-dismiss="modal" onclick="accept()">Acepto los terminos</button>
        </div>
        </div>
    </div>
</div>
@endsection