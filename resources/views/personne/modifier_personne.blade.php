<form action="{{ route('enregistrer_modification', $personne->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    
    <label for="nom">Nom:</label>
    <input type="text" name="nom" value="{{ $personne->nom }}" required>
    <br>

    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" value="{{ $personne->prenom }}" required>
    <br>

    <label for="photo">Photo:</label>
    <input type="file" name="photo">
    <br>

    <button type="submit">Enregistrer les modifications</button>
</form>