<nav class="navbar navbar-expand-lg navbar-light bg-info navbar-toggleable-md fixed-top backcolor">
    <a class= "navbar-brand" href="{{route('home.children')}}">
        <img src="letter.svg" width="30" height="30" class="d-inline-block align-top"alt="">
        NIÑO MENSAJERO  
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-nav mr-auto text-center">
            <a href="{{route('home.children')}}" class="btn1"><i class="fas fa-home"></i> Inicio</a>
        </div>
        <div class="navbar-nav ml-auto text-center">
            <a href="{{route('page')}}" class="btn1"><i class="fas fa-user-friends"></i> ¿Quiénes Somos?</a>
        </div>
    </div>
</nav>