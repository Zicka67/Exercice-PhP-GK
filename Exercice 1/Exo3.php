<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase. <br>
Notre formation DL commence aujourd'hui
</p>

<?php 

$phrase = "Notre formation DL commence aujourd'hui";
$newphrase = str_replace("aujourd'hui", "demain", $phrase); //str_replace ici rempalce aujourd'hui par demain dans la $phrase1
echo $phrase . "<br>";
echo $newphrase;