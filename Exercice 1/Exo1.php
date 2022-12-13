<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase 
(espaces inclus)</p>

<?php    

$phrase = "Notre formation DL commence aujourd'hui";
$nbcaracters = strlen($phrase); //strlen compte le nombre de caractère
echo "la phrase contient $nbcaracters caractères";

// &nbsp                pour créer un espace en PHP
// echo "<br>";         pour créer un retour à la ligne
//echo "<pre> </pre>";  pour créer un retour à la ligne
