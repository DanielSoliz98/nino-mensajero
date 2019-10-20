@section('title-menu', 'MENÚ DE ADMINISTRADOR')
@section('menu-list')
    <a href="{{route('admin.personal')}}" class="list-group-item list-group-item-action bg-light">Información de Personal</a>
    <a href="{{route('allProfiles')}}" class="list-group-item list-group-item-action bg-light">Informaciones Generadas</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Boletines</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Notificaciones</a> 
@endsection
