<form action="/personne/enregistrer-personne" method="post" enctype="multipart/form-data">
    @csrf
    <label for="nom">Nom:</label>
    <input type="text" name="nom" required>
    <br>

    <label for="prenom">Prénom:</label>
    <input type="text" name="prenom" required>
    <br>

    <label for="photo">Photo:</label>
    <input type="file" name="photo">
    <br>

    <button type="submit">Enregistrer</button>
</form>

<br>
<a href="/dashboard">Home</a>