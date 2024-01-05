<a href="{{ route('rechercher_personnes') }}">Rechercher des personnes</a>
<hr>
<hr>

<h1>Liste des Produits</h1>

@foreach($personnes as $personne)
<p>Name: {{ $personne->nom }}, <br> Description: {{ $personne->prenom }}</p>
    
@if($personne->photo)
    <img src="{{ asset('storage/' . $personne->photo) }}" alt="Photo de {{ $personne->prenom }}">
@endif

<a href="{{ route('modifier_personne', $personne->id) }}">Modifier</a>

<form action="{{ route('supprimer_personne', $personne->id) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette personne?');">
    @csrf
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>

<hr>
@endforeach

<br>
<a href="/personne/ajouter-personne">ajouter</a>
<br>
<a href="/dashboard">Home</a>