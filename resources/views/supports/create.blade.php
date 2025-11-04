@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un support</h1>
    <form action="{{ route('supports.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nom du support</label>
            <input type="text" name="nom_support" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="code" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Durée prêt (jours)</label>
            <input type="number" name="duree_pret_jours" class="form-control" min="1" max="90" required>
        </div>
        <div class="form-group">
            <label>Caution (euros)</label>
            <input type="number" step="0.01" name="caution_euros" class="form-control">
        </div>
        <div class="form-check">
            <input type="checkbox" name="disponible_pret" class="form-check-input" checked>
            <label class="form-check-label">Disponible au prêt</label>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection