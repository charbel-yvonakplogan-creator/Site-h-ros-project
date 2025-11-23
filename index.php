<?php require 'header.phtml'; ?>

<p>
    Embarque dans une histoire dont tu es le héros !

Ici il s'agira de faire les bons choix afin de survivre le plus longtemps possible dans un lieu oppressant. 

Avec votre groupe de pote, vous décidez de faire un urbex dans un coin désert, loin de toute civilisation. Par mégarde, vous finissez par perdre de vue vos amis et vous retrouvez seul livrer à vous meme. 

A partir de là, plusieurs choix s'offrent à vous : 

</p>

<form action="choices/home.php">
    <button type="submit">Vous entendez des voix familières dans une maison et vous y entrez</button>
</form>

<form action="choices/foret.php">
    <button type="submit">Vous ignorez les voix et vous vous dirigez vers ce qui semble etre une foret</button>
</form>

<form action="choices/back.php">
    <button type="submit">Vous essayez de revenir sur vos pas dans l'espoir de retrouver vos amis</button>
</form>

<?php require 'footer.phtml'; ?>