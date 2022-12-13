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

$masculin = "Monsieur";
$feminin = "Madame" || "Mademoiselle";

foreach ($civilite as $mot) {  
    //echo $mot . "<br>";
    
        
        ?>
        <input type="radio" id="Monsieur" name="<?=$mot?>">
        <?php
        echo $mot . "<br>";

    
}
?>






</body>

</html>