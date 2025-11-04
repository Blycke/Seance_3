<?php

namespace App\Http\Controllers;

use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        $supports = Support::all();
        return view('supports.index', compact('supports'));
    }

    public function create()
    {
        return view('supports.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom_support' => 'required|max:100|unique:supports',
            'code' => 'required|max:5|unique:supports',
            'duree_pret_jours' => 'required|integer|between:1,90',
            'caution_euros' => 'nullable|numeric|min:0',
            'disponible_pret' => 'boolean',
        ]);
        $validated['disponible_pret'] = $request->has('disponible_pret');

        Support::create($validated);
        return redirect()->route('supports.index')->with('success', 'Support ajouté avec succès !');
    }

    public function edit(Support $support)
    {
        return view('supports.edit', compact('support'));
    }

    public function update(Request $request, Support $support)
    {
        $validated = $request->validate([
            'nom_support' => 'required|max:100|unique:supports,nom_support,'.$support->id,
            'code' => 'required|max:5|unique:supports,code,'.$support->id,
            'duree_pret_jours' => 'required|integer|between:1,90',
            'caution_euros' => 'nullable|numeric|min:0',
            'disponible_pret' => 'boolean',
        ]);
        $validated['disponible_pret'] = $request->has('disponible_pret');

        $support->update($validated);
        return redirect()->route('supports.index')->with('success', 'Support mis à jour avec succès !');
    }

    public function destroy(Support $support)
    {
        $support->delete();
        return redirect()->route('supports.index')->with('success', 'Support supprimé avec succès !');
    }
}
