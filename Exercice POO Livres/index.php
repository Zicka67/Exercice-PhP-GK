<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Livres</title>

</head>

<body>

    <?php

    // Utiliser les pages suivantes :
    // require "Auteur.php";
    // require "Livre.php";
    spl_autoload_register(function ($class_name) 
    {
        require_once $class_name . '.php';
    });

    // Instancier l'auteur
    $king = new Auteur("King", "Stephen");


    // Instancier les livres
    $livre1 = new Livre($king, "Ca", 1986, 1138, 20);
    $livre2 = new Livre($king, "Simeterre", 1983, 374, 15);
    $livre3 = new Livre($king, "Le Fléau", 1978, 823, 14);
    $livre4 = new Livre($king, "Shining", 4977, 447, 16);


    echo "<strong>" . "Livres de" . "</strong>"  . " " . "<strong>" . $king . "</strong>" . "<br> <br>";
    // var_dump($king->get_listeLivres());
    echo $king->afficherBibliographie();





    ?>

</body>

</html>