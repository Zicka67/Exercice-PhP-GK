<h1>Exercice 5bis</h1>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>

<form action="method-get.php" method="get">
Nom : <input type="text" name="nom" />
Prenom : <input type="text" name="prenom" />
Ville : <input type="text" name="ville" />
<input type="submit" name="submit" />


<?php

//Vérifier si le formulaire est fait 
//isset() Vérifie si une variable est déclarée et pas null
if (isset($_GET['submit'])) {
    // récupérer les données du formulaire en utilisant la valeur des attributs name comme clé
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $ville = $_GET['ville'];
    //afficher le résultat
    echo 'nom : ' . $nom . ' prénom : ' . $prenom . ' ville : ' . $ville;
}
?>

</form>

</body>

</html>

<?php
