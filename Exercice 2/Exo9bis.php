<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")
</p>
<br><br><br><br><br>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Document</title>

</head>

<body>

<?php

$civilite = ["Monsieur", "Madame", "Mademoiselle"];

$masculin = "Masculin";
$feminin = "Madame" || "Mademoiselle";
$autre = "Autre";
//$imput = "<input type='radio' id='$mot' name='$mot'>";

foreach ($civilite as $mot) {
    ?>
    <!-- <input type="radio" id="$mot" name="$mot"> -->  
    <?php 
    //echo $mot . "<br>";
    if ($mot = "Monsieur") {
        $mot = $masculin;
        echo "<input type='radio' id='$mot' name='$mot'>";
        echo $mot . "<br>";
    }elseif ($mot = "Madame" || "Mademoiselle") {
        $mot = $feminin;
        echo "<input type='radio' id='$mot' name='$mot'>";
        echo $mot . "<br>";
        // }else{
            //     $mot = $feminin;
            //     echo "<input type='radio' id='$mot' name='$mot'>";
            //     echo  $autre;
            // }
        }
    }
    ?>