<h1>Exercice 1</h1>

<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.
<br>
Vous devrez appeler la fonction comme suit: convertirMajRouge($texte);
</p>
<br>
Affichage(si $texte = «Mon texte en paramètre»)
<br><br><br><br><br>


<?php


$color = "red";
$convertirMajRouge = "<p style='color:$color'>". mb_strtoupper('Mon texte en paramètre')."  </p>";  

//mb_strtoupper()  pour mettre en majuscule et conserver les accents un texte

echo ($convertirMajRouge);


