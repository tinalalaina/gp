<h1>Résultats de la recherche</h1>

@if($resultats->isEmpty())
    <p>Aucun résultat trouvé.</p>
@else
    @foreach($resultats as $resultat)
        <p>Nom: {{ $resultat->nom }}, Prénom: {{ $resultat->prenom }}</p>
        @if($resultat->photo)
            <img src="{{ asset('storage/' . $resultat->photo) }}" alt="Photo de {{ $resultat->prenom }}">
        @endif
        <hr>
    @endforeach
@endif