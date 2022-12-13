<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d'une chaîne de caractère représentant une date.
</p>
<br>
Exemple : <br>
formaterDateFr("2018-02-23");
<br><br><br><br><br>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>



<?php

//https://www.develop4fun.fr/afficher-la-date-du-jour-en-francais-avec-php/#:~:text=Pour%20afficher%20la%20date%20du,date%20avec%20la%20configuration%20locale.
//https://www.php.net/manual/fr/datetime.construct.php


$date = new DateTime('23-02-2018');
$formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
echo $formatter->format($date);






