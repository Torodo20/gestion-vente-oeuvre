@extends('admin.layouts')

@section('content')

<div class="container">
    <h1>Gestion des Acheteurs</h1>
    <a href="{{ route('admin.acheteurs.create') }}" class="btn btn-primary mb-3">Ajouter un Acheteur</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($acheteurs as $acheteur)
                <tr>
                    <td>{{ $acheteur->id }}</td>
                    <td>{{ $acheteur->name }}</td>
                    <td>{{ $acheteur->email }}</td>
                    <td>{{ $acheteur->phone_number }}</td>
                    <td>{{ $acheteur->address }}</td>
                    <td>
                        <a href="{{ route('admin.acheteurs.edit', $acheteur->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('admin.acheteurs.destroy', $acheteur->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet acheteur ?');">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection