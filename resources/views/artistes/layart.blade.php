<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '{{ $artiste->nom }} - Profil de lArtiste') </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand, .nav-link {
            color: #ffffff !important;
        }
        .navbar-brand:hover, .nav-link:hover {
            color: #ffc107 !important;
        }
        .profile-header {
            background-image: url('{{ asset("images/profile-bg.jpg") }}');
            background-size: cover;
            background-position: center;
            padding: 50px 0;
            color: white;
            text-align: center;
        }
        .profile-header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        .profile-header p {
            font-size: 1.2rem;
        }
        .card {
            margin: 20px 0;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    @yield('content') 
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="{{ route('artistes.artbord') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('artiste.oeuvres.index') }}">Mes Œuvres</a> --}}
                </li>
                <li class="nav-item">
                    {{-- <a class="nav-link" href="{{ route('artistes.artbord.edit') }}">Modifier Profil</a> --}}
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Se Déconnecter</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- <div class="profile-header">
    <div class="container">
        <h1>{{ $artiste->nom }}</h1>
        <p>Artiste depuis {{ $artiste->date_naissance }}</p>
    </div>
</div> --}}

{{-- <div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Informations Personnelles</h5>
                    <p><strong>Date de Naissance:</strong> {{ $artiste->date_naissance }}</p>
                    <p><strong>Lieu de Naissance:</strong> {{ $artiste->lieu_naissance }}</p>
                    <p><strong>Téléphone:</strong> {{ $artiste->telephone }}</p>
                    <p><strong>Description:</strong> {{ $artiste->description }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Mes Œuvres</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($artiste->oeuvres as $oeuvre)
                                <tr>
                                    <td>{{ $oeuvre->titre }}</td>
                                    <td>{{ $oeuvre->description }}</td>
                                    <td>
                                        @if ($oeuvre->image_url)
                                            <img src="{{ asset('storage/' . $oeuvre->image_url) }}" alt="{{ $oeuvre->titre }}" width="100">
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
