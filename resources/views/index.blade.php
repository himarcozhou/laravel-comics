@extends('layout.default')

@section('page_title', 'DC Comics')

@section('content')
    <main>
        <section class="first-section">
            <div class="container">
                <img src="{{ asset('img/cover-home.jpg') }}" alt="">
            </div>
        </section>
        <section class="second-section">
            <div class="container">
                <ul class="comics-list">
                    @foreach ($actioncomicsList as $key => $comic)
                        <li>
                            <a href="">
                                <img src="{{ $comic['thumb'] }}">
                                <h3>{{ $comic['title'] }}</h3>
                            </a>
                        </li>
                    @endforeach 
                 </ul>
            </div>
            <div class="button-ssection container flex justify">
                <button type="submit">LOAD MORE</button>
            </div>
        </section>
        <section class="third-section">
            <ul class="flex justify align-items">
                <li>
                    <img src="./img/digital-comics.png" alt="">
                </li>
                <li class="mr2">DIGITAL COMICS</li>
                <li>
                    <img src="./img/merchandise.png" alt=""> 
                </li>
                <li class="mr2">DC MERCHANDISE</li>
                <li>
                    <img src="./img/subscription.png" alt="">
                </li>
                <li class="mr2">SUBSCRIPTION</li>
                <li>
                    <img src="./img/shop.png" alt="">
                </li>
                <li class="mr2">COMIC SHOP LOCATOR</li>
                <li>
                    <img src="./img/power-visa.png" alt="">
                </li>
                <li>DC POWER VISA</li>
            </ul>
        </section>
        <section class="fourth-section">

        </section>
    </main>    
@endsection