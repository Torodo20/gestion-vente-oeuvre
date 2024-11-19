@extends('artistes.layart')

@section('content')
<div class="container">
    <h2>Profil de l'Artiste</h2>
    @if($artiste)
        <p><strong>Nom :</strong> {{ $artiste->nom_complet }}</p>
        <p><strong>Date de Naissance :</strong> {{ $artiste->date_naissance }}</p>
        <p><strong>Lieu de Naissance :</strong> {{ $artiste->lieu_naissance }}</p>
        <p><strong>Téléphone :</strong> {{ $artiste->telephone }}</p>
        <p><strong>Description :</strong> {{ $artiste->description }}</p>
        <p><strong>Parcours :</strong> {{ $artiste->parcours }}</p>
    @else
        <p>Aucune information disponible.</p>
    @endif
    <h2>Mes Œuvres</h2>
    <ul>
        @foreach ($artiste->oeuvres as $oeuvre)
            <li>{{ $oeuvre->titre }} - {{ $oeuvre->description }}</li>
        @endforeach
    </ul>
</div>
@endsection
