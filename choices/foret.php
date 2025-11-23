<?php require '../header.phtml'; ?>

<p>
    La foret est eclairée par le clair de lune, donc pouvez y voir plus ou moins clairement. Vous avancez et soudain, deux sentiers se dévoilent :
</p>

<form action="lac.php">
    <button type="submit">Un sentier lumineux, ou vous semblez entendre le ruissellement de l'eau d'un lac</button>
</form>

<form action="dark.php">
    <button type="submit">Un sentier sombre, qui laisse ne laisse pas entrevoir grand chose</button>
</form>

<?php require '../footer.phtml'; ?>