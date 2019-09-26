<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        var isshow = localStorage.getItem('isshow');
        if (isshow== null) {
            $("#termsModal").modal('show');
        }
    });
    function accept(){
        localStorage.setItem('isshow', 1);
    };
</script>
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
<div class="container-fluid backgroud">
    <div class=" content d-flex align-items-center justify-content-center">
    <a href="{{route('writeLetter')}}" class="btn btn-primary btn-lg">Escribir mi Carta</a>
    </div>
</div>
<div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalAnonymity" 
     aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="termsModalAnonymity">Terminos de Uso - Niño Mensajero</h5>
        </div>
        <div class="modal-body">
            <p>La pagina Niño Mensajero es solo para niños entre seis (6) y trece (13) años de edad.</p>
            <p>Niño Mensajero mantendra en secreto tu informacion personal.</p>
            <p>Haciendo clic en "Continuar", estarias de acuerdo con nuestras reglas de privacidad, podras enviar cartas y ver nuestro Boletin.</p>
        </div>
        <div class="modal-footer">
            <button onclick="location.href = 'https://www.google.com';" type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="accept()">Continuar</button>
        </div>
        </div>
    </div>
</div>
@endsection