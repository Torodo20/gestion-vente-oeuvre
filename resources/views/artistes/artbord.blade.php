@extends('artistes.layart')

@section('content')
<div class="container">
    <h1>Tableau de Bord des Artistes</h1>
    <p>Bienvenue dans votre tableau de bord. Ici, vous pouvez gérer vos œuvres, consulter vos ventes et plus encore.</p>
    <!-- Ajoute ici d'autres éléments de votre tableau de bord -->
    <button type="submit" class="btn btn-primary"><a href="{{ route('artistes.store') }}">S'inscrire en tant que artiste</a></button>
</div>
@endsection
