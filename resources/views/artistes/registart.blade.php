@extends('artistes.layart')

@section('content')
<div class="container">
    <h2>S'inscrire en tant qu'Artiste</h2>
    <form action="{{ route('artistes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom_complet">Nom Complet</label>
            <input type="text" name="nom_complet" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" name="date_naissance" class="form-control">
        </div>
        <div class="form-group">
            <label for="lieu_naissance">Lieu de Naissance</label>
            <input type="text" name="lieu_naissance" class="form-control">
        </div>
        <div class="form-group">
            <label for="telephone">Numéro de Téléphone</label>
            <input type="text" name="telephone" class="form-control">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="parcours">Parcours</label>
            <textarea name="parcours" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>
@endsection
