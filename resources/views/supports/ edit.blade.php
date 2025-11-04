@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifier le support</h1>
    <form action="{{ route('supports.update', $support->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nom du support</label>
            <input type="text" name="nom_support" class="form-control" value="{{ $support->nom_support }}" required>
        </div>
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="code" class="form-control" value="{{ $support->code }}" required>
        </div>
        <div class="form-group">
            <label>Durée prêt (jours)</label>
            <input type="number" name="duree_pret_jours" class="form-control" value="{{ $support->duree_pret_jours }}" min="1" max="90" required>
        </div>
        <div class="form-group">
            <label>Caution (euros)</label>
            <input type="number" step="0.01" name="caution_euros" class="form-control" value="{{ $support->caution_euros }}">
        </div>
        <div class="form-check">
            <input type="checkbox" name="disponible_pret" class="form-check-input" {{ $support->disponible_pret ? 'checked' : '' }}>
            <label class="form-check-label">Disponible au prêt</label>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
