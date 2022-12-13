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
<!--  https://developer.mozilla.org/fr/docs/Web/HTML/Element/select -->
<!-- https://www2.ulb.ac.be/demo/format-ulb/index-72.html -->
<!-- https://www2.ulb.ac.be/demo/format-ulb/index-74.html -->
<!-- https://www.w3schools.com/tags/tag_input.asp -->

<title>Document</title>

</head>
<body>



<?php
// <input type="checkbox"> plusieurs choix peuvent être coché
// <input type="radio"> un seul choix peut être coché

$list = ["Monsieur", "Madame", "Mademoiselle"];
// On parcourt le tableau $list
foreach($list as $choix) {
    //echo $choix;
    ?>
    <!-- On créer des cases à cocher pour chaque $choix -->
    <input type="radio" id="$choix" name="$choix" required>
    <!-- <obligatoire minimum="1" maximum="1"/> ?? ne fonctionne pas -->
    <!-- On affiche les choix -->
    <?php 
    $masculin = "Monsieur";
    $feminin = "Madame" || " Mademoiselle";
    echo $masculin . "<br>"; ?>
    
    <?php
}
?>