<?php require '../header.phtml'; ?>

<p>
    Vous entrez lentement dans la maison. Tout semble calme, mais l'ambiance est terriblement pesante.
    Vous apercevez un escalier qui semble mener à l'étage du dessus, d'ou proviennent les voix que vous entendiez. 
</p>

<form action="upstairs.php">
    <button type="submit">Monter l'escalier dans l'espoir que ce soit les voix de vos amis</button>
</form>

<form action="groundfloor.php">
    <button type="submit">Rester en bas et chercher de quoi appeler vos amis</button>
</form>

<?php require '../footer.phtml'; ?>