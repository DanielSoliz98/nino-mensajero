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
            <div class="justify-content-center mt-2 mb-4 table-responsive">
                <table class="table table-sm table-striped tablebody">
                    <thead class="table-head">
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Cargo</th>
                        <th>Correo</th>
                    </thead>
                    
                    <tr>
                        <td>Mauricio</td>
                        <td>Cadima Guevara</td>
                        <td>Desarrollador</td>
                        <td>mauricio.cadima.guevara08@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Alison</td>
                        <td>Orellana Ríos</td>
                        <td>Desarrolladora</td>
                        <td>ali15.orellan@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Daniel Alberto</td>
                        <td>Solíz Vargas</td>
                        <td>Desarrollador</td>
                        <td>danielsoliz80@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Alan Cristopher</td>
                        <td>Suarez Suarez</td>
                        <td>Desarrollador</td>
                        <td>alanss2907@gmail.com</td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</section>
@endsection