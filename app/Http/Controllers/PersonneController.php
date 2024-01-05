<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Personne;
use Illuminate\Support\Facades\DB;

class PersonneController extends Controller
{
    public function createForm()
    {
        return view('personne.ajouter_personne');
    }

   public function saveForm(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $personne = Personne::create($request->except('photo'));

    if ($request->hasFile('photo')) {
        $path = $request->file('photo')->storeAs('public/photos', $personne->id . '.' . $request->file('photo')->extension());
        $personne->update(['photo' => 'photos/' . $personne->id . '.' . $request->file('photo')->extension()]);
    }

    return redirect()->route('liste_personnes');
}

    public function list()
    {
        $personnes = Personne::all();
        return view('personne.liste_personnes', compact('personnes'));
    }
    public function editForm($id)
{
    $personne = Personne::findOrFail($id);
    return view('personne.modifier_personne', compact('personne'));
}

public function saveEdit(Request $request, $id)
{
    $personne = Personne::findOrFail($id);

    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $personne->update($request->except('photo'));

    if ($request->hasFile('photo')) {
        Storage::delete('public/' . $personne->photo); // Supprime l'ancienne photo
        $path = $request->file('photo')->storeAs('public/photos', $personne->id . '.' . $request->file('photo')->extension());
        $personne->update(['photo' => 'photos/' . $personne->id . '.' . $request->file('photo')->extension()]);
    }

    return redirect()->route('liste_personnes');
}
public function deletePerson($id)
{
    $personne = Personne::findOrFail($id);

    if ($personne->photo) {
        Storage::delete('public/' . $personne->photo); // Supprime la photo associée
    }

    $personne->delete();

    return redirect()->route('liste_personnes');
}
public function searchForm()
{
    return view('personne/rechercher_personnes');
}
public function searchResults(Request $request)
{
    $nom = $request->input('nom');
    $prenom = $request->input('prenom');

    $resultats = DB::table('personnes')
        ->where('nom', 'LIKE', '%' . $nom . '%')
        ->where('prenom', 'LIKE', '%' . $prenom . '%')
        ->get();

    return view('personne.resultats_recherche', compact('resultats'));
}


}