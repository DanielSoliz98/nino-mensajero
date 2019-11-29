@extends('users.menu')
@section('title', 'Personal-Mi Perfil')
@section('page-title', 'Mi Perfil')
@section('user-content')
    <div class="container-fluid register color-component mt-1">
        <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12">
                    <div class="card mt-4 mb-4">
                        <div class="card-header text-center"><h2>ACTUALIZAR MI PERFIL</h2></div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST" action="{{ route('updateMyProfile') }}">
                                {{ csrf_field() }}
                                <div class="form-group row">
                                    <label for="full_name" class="col-md-4 col-form-label d-flex justify-content-end">Nombre completo:</label>
                                    <div class="col-md-7">
                                        <input type="text" readonly class="form-control-plaintext" id="full_name" value="{{$profile[0]->full_name}}">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label d-flex justify-content-end">Correo electrónico:</label>
                                    <div class="col-md-7">
                                        <input type="text" readonly class="form-control-plaintext" id="email" value="{{$profile[0]->email}}">
                                    </div>
                                </div>                                
            
                                <div class="form-group{{ $errors->has('ci') ? ' has-error' : '' }} row d-flex align-items-center">
                                    <label for="ci" class="col-md-4 control-label d-flex justify-content-end">Carnet de identidad</label>
            
                                    <div class="col-md-7">
                                        <input id="ci" type="number" class="form-control" name="ci" value="{{$profile[0]->ci}}" 
                                        data-toggle="tooltip" data-placement="top" title="Por favor llene este campo."
                                        oninvalid="this.setCustomValidity('Carnet de identidad es un campo requerido.')" oninput="setCustomValidity('')" required>
            
                                        @if ($errors->has('ci'))
                                            <span class="help-block">
                                            </span>
                                            <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                                <strong>{{ $errors->first('ci') }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} row d-flex align-items-center">
                                    <label for="phone" class="col-md-4 control-label d-flex justify-content-end">Número de teléfono</label>
            
                                    <div class="col-md-7">
                                        <input id="phone" type="number" class="form-control" name="phone" value="{{$profile[0]->phone}}" 
                                        data-toggle="tooltip" data-placement="top" title="Por favor llene este campo."
                                        oninvalid="this.setCustomValidity('Número de teléfono es un campo requerido.')" oninput="setCustomValidity('')" required>
            
                                        @if ($errors->has('phone'))
                                            <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group{{ $errors->has('profession') ? ' has-error' : '' }} row d-flex align-items-center">
                                    <label for="profession" class="col-md-4 control-label d-flex justify-content-end">Profesión</label>
            
                                    <div class="col-md-7">
                                        <select id="profession" name="profession[]" class="form-control selectpicker" multiple required
                                        data-toggle="tooltip" data-placement="top" title="Seleccione una o varias profesiones para agregarlas.">
                                            <option @if ((strpos($profile[0]->profession,"Psicólogo"))!==false)selected @endif>Psicólogo</option>
                                            <option @if ((strpos($profile[0]->profession,"Pedagogo"))!==false)selected @endif>Pedagogo</option>
                                            <option @if ((strpos($profile[0]->profession,"Editor"))!==false)selected @endif>Editor</option>
                                            <option @if ((strpos($profile[0]->profession,"Escritor"))!==false)selected @endif>Escritor</option>
                                            <option @if ((strpos($profile[0]->profession,"Psiquiatra"))!==false)selected @endif>Psiquiatra</option>
                                            <option @if ((strpos($profile[0]->profession,"Abogado"))!==false)selected @endif>Abogado</option>
                                            <option @if ((strpos($profile[0]->profession,"Otro"))!==false)selected @endif>Otro</option>
                                        </select>
                                        @if ($errors->has('profession'))
                                            <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                                <strong>{{ $errors->first('profession') }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }} row d-flex align-items-center">
                                    <label for="degree" class="col-md-4 control-label d-flex justify-content-end">Grado académico</label>
            
                                    <div class="col-md-7">
                                        <select id="degree" name="degree" class="form-control selectpicker" required 
                                        data-toggle="tooltip" data-placement="top" title="Seleccione su maximo grado academico.">
                                            <option @if ($profile[0]->degree=="Egresado")selected @endif>Egresado</option>
                                            <option @if ($profile[0]->degree=="Licenciado")selected @endif>Licenciado</option>
                                            <option @if ($profile[0]->degree=="Magister")selected @endif>Magister</option>
                                            <option @if ($profile[0]->degree=="Doctorado")selected @endif>Doctorado</option>
                                        </select>
                                        @if ($errors->has('degree'))
                                            <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                                <strong>{{ $errors->first('degree') }}</strong>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                    </div>
                                </div>
            
                                <div class="form-group{{ $errors->has('specialties') ? ' has-error' : '' }} row d-flex align-items-center">
                                        <label for="specialties" class="col-md-4 control-label d-flex justify-content-end">Especialidades</label>
                
                                        <div class="col-md-7">
                                            <select id="specialties" name="specialties[]" class="form-control selectpicker" multiple required
                                            data-toggle="tooltip" data-placement="top" title="Seleccione una o varias especialidades para agregarlas.">
                                                <option @if ((strpos($profile[0]->specialties,"Psicología Familiar"))!==false)selected @endif>Psicología Familiar</option>
                                                <option @if ((strpos($profile[0]->specialties,"Psicología Infantil"))!==false)selected @endif>Psicología Infantil</option>
                                                <option @if ((strpos($profile[0]->specialties,"Servicio Social"))!==false)selected @endif>Servicio Social</option>
                                                <option @if ((strpos($profile[0]->specialties,"Psiquiatría Infantil"))!==false)selected @endif>Psiquiatría Infantil</option>
                                                <option @if ((strpos($profile[0]->specialties,"Escritor Infantil"))!==false)selected @endif>Escritor Infantil</option>
                                                <option @if ((strpos($profile[0]->specialties,"Educación Infantil"))!==false)selected @endif>Educación Infantil</option>
                                                <option @if ((strpos($profile[0]->specialties,"Educación Especial"))!==false)selected @endif>Educación Especial</option>
                                                <option @if ((strpos($profile[0]->specialties,"Otro"))!==false)selected @endif>Otro</option>
                                            </select>
                                            @if ($errors->has('specialties'))
                                                <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                                    <strong>{{ $errors->first('specialties') }}</strong>
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
            
                                <div class="form-group">
                                    <div class="container">
                                        <div class="col-md-12 col-md-offset-8 d-flex justify-content-around">
                                            <button type="submit" class="btn3">
                                                Actualizar
                                            </button>
                                            <a class="btn3" href="{{ route('myProfile') }}">
                                                Cancelar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('users.footer')
@endsection
@section('scripts')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>
@endsection