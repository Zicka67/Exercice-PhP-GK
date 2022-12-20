<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Banque</title>

</head>

<body>

<?php


require "Compte.php";
require "Titulaire.php";

// Instancier un titulaire de compte
$titulaire = new Titulaire("Musk", "Elon", 28-06-1971,"Pretoria");

// Instancier un compte
$compte1 = new Compte("Compte courant", 5000000, "Dollars", $titulaire);
$compte2 = new Compte("Livret A", 1000000, "Dollars", $titulaire);


echo "fqfqzzq";

var_dump($compte1);






?>


</body>

</html>