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
$titulaire = new Titulaire("Musk", "Elon");

// Instancier un compte
$compte1 = new Compte($titulaire, "Compte courant");
$compte2 = new Compte($titulaire, "Livret A");











?>


</body>

</html>