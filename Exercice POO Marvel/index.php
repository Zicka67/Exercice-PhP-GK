<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MARVEL - INDEX</title>

</head>

<body>


<?php

require "Personnages.php";

//On créer un nouveau Personnage, ici $batman
$batman = new Personnage("Batman");

//Pour appeler la function regenerer
// $batman->regenerer(20);



// var_dump($batman);

//Pour récupérer la vie initiale (de la class Personnage de BASE)
//var_dump($batman->vie);

//**************************************************************************

//On créer un nouveau Personnage, ici $hulk
$hulk = new Personnage("Hulk");

//On change les paramètres vie et atk de cet objet Personnage
$hulk->vie = 140;
$hulk->atk = 40;

//Pour appeler la fonction attaquer
$hulk->attaquer($batman);
$batman->regenerer(20);

//Pour appeler la function regenerer
// $hulk->regenerer(0);

var_dump($batman);
var_dump($hulk);

//Savoir si Batman est mort ou non
if($batman->mort())
{
    echo "Batman est mort.";
} else {
    echo "Batman est toujours en vie avec" . " " . $batman->vie . " de vie.";
}









?>

</body>

</html>




