<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Peintures</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik+Bubbles&display=swap">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cabin+Sketch:wght@400;700&display=swap">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="antialiased bg-gray-900 text-gray ">
<div class="container my-5">
    <h2 class="text-center">Peintures - {{ ucfirst($type) }}</h2>

    <div class="row">
        @forelse($oeuvres as $oeuvre)
            <div class="col-md-4">
                <div class="card h-100 dynamic-card">
                    <a href="{{ route('oeuvre.details', $oeuvre->id) }}" class="card-link">
                        <div class="card-img-container">
                            <img src="{{ asset('storage/' . $oeuvre->image) }}" class="card-img-top img-fluid" alt="{{ $oeuvre->titre }}">
                        </div>
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">${{ $oeuvre->prix }}</h5>
                        <p class="card-text">Artiste: {{ $oeuvre->user->name }}</p>
                        <p class="card-text">Dimensions: {{ $oeuvre->dimension }}</p>
                        <p class="card-text">Type: {{ ucfirst($oeuvre->type) }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Aucune peinture trouvée pour ce type.</p>
        @endforelse
    </div>
</div>
</body>
</html>
