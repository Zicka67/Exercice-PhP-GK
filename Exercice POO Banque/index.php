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
$titulaire1 = new Titulaire("Musk", "Elon", "28-06-1971", "Pretoria");
// Instancier un compte
$compte1 = new Compte("Compte courant", 5000, "$", $titulaire1);
$compte2 = new Compte("Livret A", 1000, "$", $titulaire1);

$compte1->virement(0, $compte2);
$compte1->crediter(0);
$compte1->debiter(0);

$compte2->virement(0, $compte1);
$compte1->crediter(0);
$compte1->debiter(0);

// echo $titulaire1->$nom;
echo $titulaire1->afficherComptes();


?>

</body>

</html>