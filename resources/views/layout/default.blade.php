<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <!-- https://fontawesome.com/v4.7.0/icons/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title></title>
    <!-- <title>@yield('page_title')</title> -->

</head>

<body>
    <h1 class='text-center'>{{$title}}</h1>
    <h3 class='text-center'>{{$caption}}</h3>

    <div class="input-group mb-3">
        <span class="input-group-text">{{$currencyselected[1]}}</span>
        <span class="input-group-text">0.00</span>
        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
    </div>

    <div class="input-group">
        <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)">
        <span class="input-group-text">{{$cryptoselected[1]}}</span>
        <span class="input-group-text">0.00</span>
    </div>
</body>

</html>