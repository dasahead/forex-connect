<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse">
        <a href="home" class="navbar-brand">
            <img src="public/images/menu-bell2.png" alt="" class="d-inline-block align-top" height="30" width="30">
            Welcome
        </a>
        <div class="navbar-nav"> 
            <div class="dropdown" style="padding-left: 5px; padding-right: 5px;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{__("Language")}}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="/welcome/home/en" class="nav-item nav-link">English language</a>
                    <a class="dropdown-item" href="/welcome/home/de" class="nav-item nav-link">Deutsche Sprache</a>
                    <a class="dropdown-item" href="/welcome/home/es" class="nav-item nav-link">Lengua española</a>
                    <a class="dropdown-item" href="/welcome/home/it" class="nav-item nav-link">Lingua italiana</a>
                    <a class="dropdown-item" href="/welcome/home/gr" class="nav-item nav-link">Ελληνική γλώσσα</a>
                    <a class="dropdown-item" href="/welcome/home/ru" class="nav-item nav-link">Pусский язык</a>
                </div>
            </div>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <div class="dropdown" style="padding-left: 5px; padding-right: 5px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{__("Configuration")}}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="properties" class="nav-item nav-link">{{__("Properties")}}</a>
                        <a class="dropdown-item" href="rooms" class="nav-item nav-link ">{{__("Rooms")}}</a>
                        <a class="dropdown-item" href="roomtypes" class="nav-item nav-link">{{__("Room Types")}}</a>
                        <a class="dropdown-item" href="equipments" class="nav-item nav-link">{{__("Equipments")}}</a>
                        <a class="dropdown-item" href="zones" class="nav-item nav-link">{{__("Zones")}}</a>
                    </div>
                </div>
            @endguest    
        </div>
    </div> 
</nav>