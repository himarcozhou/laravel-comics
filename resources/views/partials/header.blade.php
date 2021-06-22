@php
$RouteGetName = Request::route()->getName();
@endphp
<header>
    <div class="header-top">
        <div class="container flex">
            <div class="">DC POWER<span>&#8482;</span> VISA <span>&#174;</span></div>
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
                <ul class="flex jspace">
                    <li class=" {{$RouteGetName == 'pagina-prodotti' ? 'active' : '' }}">
                        <a href="">CHARACTERS</a>
                    </li>
                    <li class="active">
                        <a href="">COMICS</a>
                    </li>
                    <li class="">
                        <a href="">MOVIES</a>
                    </li>
                    <li class="">
                        <a href="">TV</a>
                    </li>
                    <li class="">
                        <a href="">GAMES</a>
                    </li>
                    <li class="">
                        <a href="">COLLECTIBLES</a>
                    </li>
                    <li class="">
                        <a href="">VIDEOS</a>
                    </li>
                    <li class="">
                        <a href="">FANS</a>
                    </li>
                    <li class="">
                        <a href="">NEWS</a>
                    </li>
                    <li class="">
                        <a href="">SHOP</a>
                        <a class="ml5" href=""><i class="fas fa-angle-down dodgerblue"></i></a>
                    </li>
                    <li class="search">
                        <div class="flex">
                            <a href="">Search</a>
                            <a href=""><i class="fas fa-search ml5"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</header>
