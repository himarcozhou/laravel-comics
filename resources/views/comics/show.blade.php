@extends ('layout/main')

@section('content')
    <main>
        <section class="comics-detail" style="background-image: url({{ $comic['image-hero'] }});">
            <div class="container">
                <img src=" {{ $comic['image-cover'] }} " alt="{{ $comic['title'] }}">
            </div>
        </section>
        <section class="details">
            <div class="container">
                <h1> {{ $comic['title'] }} </h1>
                <div class="price flex jspace">U.S. Price: ${{ $comic['price'] }} 
                    <div class="ml">AVALIABLE ON 11/10</div>
                    <button class="green">Check Avaliability
                        <i class="fas fa-angle-down"></i>
                    </button>
                </div>
                <div class="text"> {!! $comic['body'] !!} </div>
            </div>
        </section>
        <section class="talent">
        </section>
    </main>    
@endsection