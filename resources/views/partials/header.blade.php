@php

function setLinkClass($pageName){
    $RouteGetName = Request::route()->getName();
    return $RouteGetName == $pageName ? 'active' : '';
}


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
        <div class="container f-center">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset('img/dc-logo.png') }}" alt="">
            </a>
            <div class="navbar-menu">
                <ul class="flex jspace">

                    {{-- @foreach ($navtabList as $key => $tab)
                        <li class=" {{setLinkClass('pagina-prodotti') }}">
                        <a href="{{ $tab['link'] }}">{{ $tab['name'] }}</a>
                    </li>
                    @endforeach  --}}

                    <li class="{{setLinkClass('page-comics')}}">
                        {{-- <a href="{{route('characters')}}">CHARACTERS</a> --}}
                        <a href="">CHARACTERS</a>
                    </li>
                    <li class="active">
                        <a href="">COMICS</a>
                        {{-- <a href="{{route('comics')}}">COMICS</a> --}}
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
