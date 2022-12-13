<h1>Exercice 8</h1>


<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la forme: 
<br>
Table de 8:
<br>
1 x 8 = 8
<br>
2 x 8 = 16
<br>
3 x 8 = 24 ...

</p>

<?php

//$produit = 1;
//$multiplicateur = 8;
//$resultat = $i * $multiplicateur;

//for ($i = 1; $i <= 10; $i++) {
       // echo "<br> $i x $multiplicateur = $resultat";
    //}

    $multiplicateur = 8;
    $produit = 1;


    for( $i = 1 ; $i <= 10; $i ++){
        $produit = $multiplicateur * $i;
        echo $i . ' x ' . $multiplicateur . ' = ' . $produit . '<br>';

    }