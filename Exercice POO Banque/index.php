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

// require "Compte.php";
// require "Titulaire.php";
spl_autoload_register(function ($class_name) {

    require_once $class_name . '.php';

});

// Instancier un titulaire de compte
$titulaire = new Titulaire("Musk", "Elon", 28-06-1971,"Pretoria");

// Instancier un compte
$compte1 = new Compte("Compte courant", 5000000, "Dollars", $titulaire);
$compte2 = new Compte("Livret A", 1000000, "Dollars", $titulaire);


echo $titulaire->afficherComptes;

var_dump($compte1);
var_dump($titulaire);


?>

</body>

</html>