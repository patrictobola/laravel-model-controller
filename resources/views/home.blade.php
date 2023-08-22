<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies from DB</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>

<body>
    <main>
        <div class="container flex mt-5">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-3 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                                <p class="card-text"><strong>Nationality:</strong> {{ $movie->nationality }}</p>
                                <p class="card-text"><strong>Data di uscita:</strong> {{ $movie->date }}</p>
                                <p class="card-text"><strong>Vote:</strong> {{ $movie->vote }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
