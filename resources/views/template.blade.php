<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/618ec73bd6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <script src="/js/app.js"></script>
    <title>Niño Mensajero</title>
    @yield('css')
</head>
<body class="body-content">
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-info navbar-toggleable-md sticky-top backcolor">
            <a class= "navbar-brand" href="{{route('home')}}">
                <img src="letter.svg" width="30" height="30" class="d-inline-block align-top"alt="">
                NIÑO MENSAJERO
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="navbar-nav mr-auto text-center">
                    <a href="{{route('home')}}" class="btn1"><i class="fas fa-home"></i> Inicio</a>
                </div>
                <div class="d-flex flex-row justify-content-end">
                    <a href="#" class="btn1"><i class="fas fa-user-friends"></i> ¿Quiénes Somos?</a>
                </div>
            </div>
        </nav>
        @yield('section')
    </section>
</body>
<footer>
    <div class="container d-flex align-items-center justify-content-center">
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="/"> Niño Mensajero</a>
          </div>
    </div>
    
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@yield('scripts')
</html>