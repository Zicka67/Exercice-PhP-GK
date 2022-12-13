<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.
<br>
Affichage:
La phrase «Engage le jeu que je le gagne» est palindrome
</p>

<?php 


$phrase = "Engage le jeu que je le gagne";
$phrase = strtolower($phrase);  //enlever les majuscules
$phrase = str_replace(' ', '', $phrase); //enlever les espaces


//Strrev(""); inverser la phrase

if ($phrase == Strrev($phrase)) {
    echo "La phrase $phrase est un palindrome";
} elseif ($phrase != Strrev($phrase)) {
    echo "La phrase $phrase n'est pas un palindrome"; 
} 
    








