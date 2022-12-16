<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.</p>
<br><br>
Exemple :
<br><br>
$elements = array("Monsieur","Madame","Mademoiselle");<br>
alimenterListeDeroulante($elements);
<br><br><br><br>

<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Document</title>

</head>

<body>

<!-- Label pour donner la demande a l'utilisateur, et peut être utilisé ou controlé avec for -->
<!-- option pour donner des éléments menu, des choix dans un formulaire ou document -->
<!--  https://developer.mozilla.org/fr/docs/Web/HTML/Element/select -->
<!-- https://www2.ulb.ac.be/demo/format-ulb/index-72.html -->
<!-- <optgroup></optgroup> pour créer 2 liste de choix -->
<!--représente un contrôle qui fournit une liste d'options parmi lesquelles l'utilisateur pourra choisir.-->

<select name="" id="">
<?php

$list = ["Monsieur", "Madame", "Mademoiselle"];
// On parcourt le tableau $list
foreach($list as $civilite) { 
    
    ?>
    <!-- Ici pour mettre les options en majuscule -->   <!-- Ici pour afficher les civilités -->
    <option civilite>                          <!-- <option civilite="<?php //echo strtolower($civilite); ?>">  Pour mettre en minuscule -->
    <?php echo $civilite; ?>
    </option> 
    <?php
} // ? à demander
?>

</select>
</body>

</html>









