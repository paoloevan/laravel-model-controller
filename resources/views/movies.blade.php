<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body class='bg-dark'>

    <div class="container py-5 ">

        @include('partials.header')

        <div class="row row-cols-5 gy-5">
            @foreach ($movies as $movie)
            <div class="col">
                <div class="card text-center h-100 border-none">
                    <img class="card-img-top" src="https://picsum.photos/200" alt="">
                    <div class="card-body">
                        <h3 class="mb-3">{{$movie->title}}</h3>
                        <div class="card-text">
                            <p><span class="fw-bold">Paese di produzione:</span> {{$movie->nationality}}</p>
                            <p><span class="fw-bold">Data di uscita: </span>{{$movie->date}}</p>
                            <p><span class="fw-bold">Voto: </span>{{$movie->vote}}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>