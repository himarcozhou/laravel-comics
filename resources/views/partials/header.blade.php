@php
    $RouteGetName = Request::route()->getName();
@endphp
    <header>
        <div class="header-top">
            <div class="power container flex">
                <div class="mr2">DC POWER VISA</div>
                <div>ADDITIONAL DC SITES
                    <i class="fas fa-angle-down"></i>
                </div>
            </div>
        </div>
        <div class="main-header flex">
            <div class="container flex align-items">
                <a class="navbar-brand" href="{{ route('index') }}">
                    <img src="{{ asset('img/dc-logo.png') }}" alt="">
                </a>
                <div class="navbar-menu">
                    <ul class="flex">
                        <li class="mr {{$RouteGetName == 'pagina-prodotti' ? 'active' : '' }}">
                            <a href="">CHARACTERS</a>
                        </li>
                        <li class="mr">
                            <a href="">COMICS</a>
                        </li>
                        <li class="mr">
                            <a href="">MOVIES</a>
                        </li>
                        <li class="mr">
                            <a href="">TV</a>
                        </li>
                        <li class="mr">
                            <a href="">GAMES</a>
                        </li>
                        <li class="mr">
                            <a href="">COLLECTIBLES</a>
                        </li>
                        <li class="mr">
                            <a href="">VIDEOS</a>
                        </li>
                        <li class="mr">
                            <a href="">FANS</a>
                        </li>
                        <li class="mr">
                            <a href="">NEWS</a>
                        </li>
                        <li class="mr2">
                            <a href="">SHOP</a>
                            <a href=""><i class="fas fa-angle-down dodgerblue"></i></a>
                        </li>
                        <li class="search">
                            <a href="">Search</a>
                            <a href=""><i class="fas fa-search"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </div>
    </header>