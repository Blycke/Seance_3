@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Supports</h1>
    <a href="{{ route('supports.create') }}" class="btn btn-primary mb-3">Ajouter un support</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Code</th>
                <th>Durée prêt</th>
                <th>Caution</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($supports as $support)
            <tr>
                <td>{{ $support->nom_support }}</td>
                <td>{{ $support->code }}</td>
                <td>{{ $support->duree_pret_jours }}</td>
                <td>{{ $support->caution_euros ?? '-' }}</td>
                <td>{{ $support->disponible_pret ? 'Oui' : 'Non' }}</td>
                <td>
                    <a href="{{ route('supports.edit', $support->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('supports.destroy', $support->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
