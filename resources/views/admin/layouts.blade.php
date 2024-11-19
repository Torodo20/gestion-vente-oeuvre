<!-- resources/views/layouts/admin.blade.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord Administrateur</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}"> <!-- Lien vers un fichier CSS personnalisé -->
    <style>
        body {
            display: flex;
        }
        .sidebar {
            min-width: 250px;
            background-color: #343a40;
            color: white;
            height: 100vh;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #495057;
            padding-left: 10px;
        }
        .content {
            flex-grow: 1;
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h4 class="text-center">ArtifyHouse</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.acheteurs.index') }}"><i class="fas fa-users"></i> Gérer les Acheteurs</a>
            {{-- </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.acheteurs.index') }}"><i class="fas fa-users"></i> Gérer les Artistes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('admin.acheteurs.index') }}"><i class="fas fa-users"></i> Gérer les Oeuvres</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dash') }}"><i class="fas fa-tachometer-alt"></i> Tableau de Bord</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-chart-line"></i> Statistiques</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-cog"></i> Paramètres</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>

    <div class="content">
        <div class="header">
            <h2>@yield('header', 'Admin Panel')</h2>
            <div>
                <span class="badge bg-secondary">Bienvenue, Admin</span>
            </div>
        </div>

        <div class="container mt-4">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
