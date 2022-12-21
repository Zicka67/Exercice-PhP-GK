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
$batman = new Personnage();


//Pour récupérer la vie initiale (de la class Personnage de BASE)
//var_dump($batman->vie);

//Pour appeler la function crier (de la class Personnage de BASE)
var_dump($batman->crier());











?>

</body>

</html>




