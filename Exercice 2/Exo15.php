<h1>Exercice 1</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.

</p>
<br>
Affichage: <br>
L'adresse elan@elan-formation.fr est une adresse e-mail valide
<br><br><br><br><br>


<?php

$url = "http://php.net/manual/fr/book.filter.php";

if (filter_var($url, FILTER_VALIDATE_URL)) {
    echo ( "L'adresse" . "  " . $url . " " . "est valide.");
} else {
    echo ( "L'adresse" . "  " . $url . " " . "n'est pas valide.");
}