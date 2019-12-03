<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-info navbar-toggleable-md backcolor-formal">
    <a class= "navbar-brand" href="#">
        <img src="/letter.svg" width="30" height="30" class="d-inline-block align-top"alt="">
        NIÑO MENSAJERO
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <div class="navbar-nav mr-auto text-center">
            <a href="{{route('home')}}" class="btn3"><i class="fas fa-home"></i> Inicio</a>
        </div>
        
        <div class="navbar-nav ml-auto text-center">
            @if (Auth::check())
                <li class="nav-item dropdown">
                        <div class="dropdown">
                            
                            <a class="btn3 dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle"></i> {{ Auth::user()->full_name }}
                            </a>
                          
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                                @role('personal')
                                    <a class="dropdown-item" href="{{ route('myProfile') }}">
                                        <i class="fas fa-address-card"></i> Ver mi perfil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                @endrole
                                <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt"></i> Cerrar sesión 
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                          </div>
                      </li>
            @endif
        </div>
    </div>
</nav>
    