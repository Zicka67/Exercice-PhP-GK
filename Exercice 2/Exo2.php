<h1>Exercice 2</h1>

<p>Soit le tableau suivant:
$capitales= array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
<br>
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays)
grâce à une fonction personnalisée.
<br>
Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);
</p>
<br>
Affichage(si $texte = «Mon texte en paramètre»)
<br><br>
Pays Capitale
ALLEMAGNE Berlin
FRANCE Paris
ITALIE Rome
USA Washington
<br><br><br><br>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>

<table>

<thead>
<tr>
<th>Pays</th>
<th>Capitale</th>
</tr>
</thead>

<tbody>

<?php

// asort tri par ordre alphabétique les mots
// sort tri par ordre les chiffres
// mb_strtoupper pour mettre en majuscule

$tabPaysCapitale = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome",
];
asort($tabPaysCapitale);

foreach ($tabPaysCapitale as $pays => $capitale) {
    echo "<tr>",
    "<td> <strong>$pays</strong> <td>",
    "<td> $capitale <td>",
    "</tr>";
}


?>
</tbody>

</table>


</body>

</html>