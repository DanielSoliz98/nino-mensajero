<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info navbar-toggleable-md backcolor">
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
        <div class="d-flex flex-row justify-content-center">
            <a href="#" class="btn1"><i class="fas fa-user-friends"></i> ¿Quiénes Somos?</a>
        </div>
    </div>
</nav>