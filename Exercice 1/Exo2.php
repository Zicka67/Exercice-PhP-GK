<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci. <br>
Notre formation DL commence aujourd'hui
</p>

<?php 

$phrase = "Notre formation DL commence aujourd'hui";
$mots = str_word_count($phrase); // str_word compte le nombre de mot de la $phrase
echo "la phrase contient $mots mots";

