<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant le nom des champs associés.
</p>
<br>
Exemple:
<br>
$nomsInput = array("Nom","Prénom","Ville");
<br>
afficherInput($nomsInput);
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

<!-- <form action="#" method="post">
<label>Nom &nbsp &nbsp <input type="text" name="nom" /> <br><br>
<label>Prénom <input type="text" name="prénom" /></p>
<label>Ville &nbsp &nbsp <input type="text" name="ville" /></p>
<p><input type="submit" value="Valider"></p>
</form> -->

<form action="" method="post">

<?php

$list = ["Nom", "Prénom", "Ville"];

foreach($list as $infos) { 
    
    ?> <br>                          
    <?php echo $infos ?> <br> <input type="text" name="">
    <br>
    </option>

    <?php
}
?>

</form>

</body>

</html>