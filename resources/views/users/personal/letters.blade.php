@extends('users.menu')
@section('title', 'Personal-Cartas de Niños')
@section('page-title', 'Cartas de Niños')
@include('users.personal.menu-list')
@section('user-content')
    @if (count($letters) > 0)
    <div class="infinite-scroll mb-2">
        @foreach($letters as $letter)
            <div class="card mt-1 color-component">
                <div class="card-body">
                    <div class="row">
                        <div class="col-10">
                            <p class="card-text">{{ str_limit($letter->content, 135) }}</p>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <div class="card-text text-muted">
                                @if(count($letter->images) == 1)
                                    <span class="badge badge-light">{{$letter->images->count()}} imágen</span>
                                    {{$letter->created_at->diffForHumans()}}
                                @else
                                    <span class="badge badge-light">{{$letter->images->count()}} imágenes</span>
                                    {{$letter->created_at->diffForHumans()}}
                                @endif
                            </div>
                        </div>
                    </div>
                    <a href="{{route('user.letter.read', $letter)}}" class="stretched-link"></a>
                </div>
            </div>
        @endforeach
        {{ $letters->links() }}
    </div>
    @else
    <div class="card mt-1 color-component text-center">
        <div class="card-body">
            <h5>No hay cartas para leer.</h5>
        </div>
    </div>
    @endif
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="/js/jquery.jscroll.min.js"></script>
    <script type="text/javascript">
        $('ul.pagination').hide();
        $(function() {
            $('.infinite-scroll').jscroll({
                autoTrigger: true,
                loadingHtml: '<img class="center-block" src="/loading.gif" "alt="Cargando Imagenes..." />', // MAKE SURE THAT YOU PUT THE CORRECT IMG PATH
                padding: 0,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.infinite-scroll',
                callback: function() {
                    $('ul.pagination').remove();
                }
            });
        });
    </script>
@endsection
