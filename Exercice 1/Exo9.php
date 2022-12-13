<h1>Exercice 9</h1>

<p> Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
    <br>
    <br>
    Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, «non imposable»).
    Affichage :
    <br>
    <br>
    Age: 32
    <br>
    Sexe: F
    <br>
    La personne est imposable.
</p>


<?php

$sexe = "homme";
$age = 50;


if ($sexe = "homme" && $age > 20) {
    echo "La personne est imposable";
} elseif ($sexe = "femme" && $age >= 18 && $age <= 35) {
    echo "La personne est imposable";
} else {
    echo " La personne est pas imposable";
}





    //elseif ($sexe != "femme" || "homme" && $age < 18 || $age > 35) {
        //echo " La personne est pas imposable";
        //}
