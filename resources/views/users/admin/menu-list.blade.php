@section('title-menu')
<h6 class="title-left">MENÚ DE ADMINISTRADOR</h6>
@endsection
@section('menu-list')
    <a href="{{route('admin.personal')}}" class="list-group-item list-group-item-action bg-light">Información de Personal</a>
    <a href="{{route('allProfiles')}}" class="list-group-item list-group-item-action bg-light">Informaciones Generadas</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Boletines</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Notificaciones</a> 
@endsection
