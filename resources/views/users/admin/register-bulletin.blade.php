@extends('users.menu')
@section('title', 'Admin-Registrar Boletín')
@section('page-title', 'ADMINISTRACIÓN DE BOLETÍN')
@section('user-content')
    <div class=" color-component register row justify-content-center mt-1 ml-1 mr-1 mb-1">
        <div class="col-md-8 col-md-offset-2">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header text-center"><h2>REGISTRAR NUEVO BOLETÍN</h2></div>
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="{{ route('register.bulletin') }}">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} row">
                                <label for="name" class="col-md-4 control-label d-flex justify-content-end">Nombre</label>
        
                                <div class="col-md-7">
                                    <input id="name" type="text" pattern="^[a-zA-ZÀ-ú ]*$" class="form-control" name="name" value="{{ old('name') }}" 
                                    data-toggle="tooltip" data-placement="top" title="Por favor llene este campo." 
                                    oninvalid="this.setCustomValidity('Nombre es un campo requerido, sólo letras.')" oninput="setCustomValidity('')"required autofocus>
        
                                    @if ($errors->has('name'))
                                        <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }} row">
                                <label for="description" class="col-md-4 control-label d-flex justify-content-end">Descripción</label>
        
                                <div class="col-md-7">
                                    <textarea maxlength="20000" class="form-control" name="description" id="description" rows="6" value="{{ old('description') }}"
                                    data-toggle="tooltip" data-placement="top" title="Por favor llene este campo."
                                    oninvalid="this.setCustomValidity('Descripción es un campo requerido.')" oninput="setCustomValidity('')" required></textarea>

                                    @if ($errors->has('description'))
                                        <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                            <strong>{{ $errors->first('description') }}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
        
                            <div class="form-group{{ $errors->has('publication_date') ? ' has-error' : '' }} row">
                                <label for="publication_date" class="col-md-4 control-label d-flex justify-content-end">Fecha publición</label>
        
                                <div class="col-md-7">
                                    <input id="publication_date" type="date" class="form-control" name="publication_date" value="{{ old('publication_date') }}"
                                    data-toggle="tooltip" data-placement="top" title="Por favor llene este campo."
                                    oninvalid="this.setCustomValidity('Fecha publicación es un campo requerido.')" oninput="setCustomValidity('')" required>
        
                                    @if ($errors->has('publication_date'))
                                        <div class="alert alert-danger mt-1 alert-dismissible fade show" role="alert">
                                            <strong>{{ $errors->first('publication_date') }}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-4 d-flex justify-content-center">
                                    <button type="submit" class="btn3">
                                            <i class="fas fa-check-double"></i> Registrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>
    </div>
@endsection