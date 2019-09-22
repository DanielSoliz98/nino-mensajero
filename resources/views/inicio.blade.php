@extends('plantilla')
@section('seccion')
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
<div class="container-fluid backgroud">
    <div class=" content d-flex align-items-center justify-content-center">
    <a href="{{route('escribirCarta')}}" class="btn btn-primary btn-lg">Escribir mi Carta</a>
    </div>
</div>
@endsection