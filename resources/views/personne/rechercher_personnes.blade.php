<form action="{{ route('resultats_recherche') }}" method="post">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom">
    <br>

    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom">
    <br>

    <button type="submit">Rechercher</button>
</form>

<br>
<a href="/dashboard">Home</a>