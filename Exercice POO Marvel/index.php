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
$batman->regenerer(20);

var_dump($batman);

//Pour récupérer la vie initiale (de la class Personnage de BASE)
//var_dump($batman->vie);

//**************************************************************************

//On créer un nouveau Personnage, ici $hulk
$hulk = new Personnage("Hulk");

$hulk->vie = 150;
$hulk->atk = 40;

//Pour appeler la function regenerer
$hulk->regenerer(0);

var_dump($hulk->mort());
var_dump($hulk);









?>

</body>

</html>




