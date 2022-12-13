<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce tableau et d’en afficher le contenu (une marque de voiture par ligne).
    Il est également demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>
<br>
Exemple: tableau ➔«Peugeot», «Renault», «BMW», «Mercedes»
<br><br>

<?php

//$tableau = array(
//array(
// 'marque' => "Peugeot",
//),
// array(
//'marque' => "Renault",
//),
//array(
//'marque' => "BMW",
//),
//array(
//'marque' => "Mercedes",
//),
//);



//$marque = array_column($tableau, "marque");
//echo "<pre>"; // pour afficher le tableau en vertical ( comme un br )
//print_r($marque); //afficher le tableau
//echo "</pre>";
//print_r(count($tableau)); //afficher le nbr d'éléments dans le tableau

$marques = ["Peugeot", "Renault", "BMW", "Mercedes"];

echo "<pre>";
// echo implode("<br>",$marque);
foreach ($marques as $marque) { // pour chaque marque dans la variable marques > ici echo marque
    echo $marque . "<br>";
}
echo "</pre>";
echo count($marques); // count pour compter le nombre d'élément dans un tableau


?>