@section('title-menu')
<h6 class="title-left">MENÚ DE PERSONAL</h6>
@endsection
@section('menu-list')
    <a href="{{route('user.letters')}}" class="list-group-item list-group-item-action bg-light">Cartas de Niños</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Información Generada</a>
    <a href="#" class="list-group-item list-group-item-action bg-light">Notificaciones</a> 
@endsection
