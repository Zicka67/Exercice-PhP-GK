<h1>Exercice 7</h1>

<p>
Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge

Poussin: entre 6 et 7 ans
Pupille: entre 8 et 9 ans
Minime: entre 10 et 11 ans
Cadet: à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.


Affichage:

L’enfant qui a 10 ans appartient à la catégorie « Minime »

</p>


<?php

$age = 2;

if ($age >= 6 && $age <= 7 ) {
    echo "L'enfant est dans la catégorie: Poussin";
} elseif ($age >= 8 && $age <= 9) {
    echo "L'enfant est dans la catégorie: Pupille"; 
} elseif ($age >= 10 && $age <= 11) {
    echo "L'enfant est dans la catégorie: Minime"; 
} elseif ($age >= 12) {
    echo "L'enfant est dans la catégorie: Cadet"; 
} elseif ($age < 6 ) {
    echo "L'enfant est hors catégorie";
}


