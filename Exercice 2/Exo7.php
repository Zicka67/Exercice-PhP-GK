<h1>Exercice 7</h1>

<p> Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.
<br>
Exemple: <br>
genererCheckbox($elements); <br>
où $elements est un tableau associatif clé => valeur avec 3 entrées.
</p> 
<br><br><br><br> 

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- https://developer.mozilla.org/fr/docs/Web/HTML/Element/select -->
<!-- https://www2.ulb.ac.be/demo/format-ulb/index-72.html -->
<!-- https://www2.ulb.ac.be/demo/format-ulb/index-74.html -->
<!-- https://www.w3schools.com/tags/tag_input.asp -->

<title>Document</title>

</head>
<body>



<?php
// <input type="checkbox"> plusieurs choix peuvent être coché
// <input type="radio"> un seul choix peut être coché

$list = ["Choix 1", "Choix 2", "Choix 3"];
// On parcourt le tableau $list
foreach($list as $choix) {
    //echo $choix;
    ?>
    <!-- On créer des cases à cocher pour chaque $choix -->
    <input type="checkbox" id="$choix" name="$choix" required>
    <!-- <obligatoire minimum="1" maximum="1"/> ?? ne fonctionne pas -->
    <!-- On affiche les choix -->
    <?php echo $choix . "<br>"; ?>
    
    <?php
}
?>



</body>
</html>