<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<style>
.backgroud{
    background: url("background.jpg");
    height: 92vh;
    background-size: cover;
    background-position: center;
}
.content{
    height: 90vh;
}
</style>
@extends('template')
@section('section')
<script type="text/javascript">
    $(document).ready(function(){
        var isshow = localStorage.getItem('isshow');
    if (isshow== null) {
        localStorage.setItem('isshow', 1);
        $("#termsModal").modal('show');
    }
    });
</script>
<div class="container-fluid backgroud">
    <div class=" content d-flex align-items-center justify-content-center">
    <a href="{{route('writeLetter')}}" class="btn btn-primary btn-lg">Escribir mi Carta</a>
    </div>
</div>
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalAnonymity" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="termsModalAnonymity">Terminos de Uso - Nino Mensajero</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Esta pagina es solo para ninos entre seis (6) y trece (13) anos de edad para enviar cartas al Nino Mensajero.</p>
            <p>No se te pedira informacion personal y el contenido de las cartas enviadas solo la vera Nino Mensajero.</p>
            <p>Continuando en la pagina, estas de acuerdo con nuestras reglas de privacidad, podras enviar cartas y ver nuestro Boletin.</p>
        </div>
        <div class="modal-footer">
            <button onclick="location.href = 'https://www.google.com';" type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Continuar en Nino Mensajero.</button>
        </div>
        </div>
    </div>
</div>
@endsection