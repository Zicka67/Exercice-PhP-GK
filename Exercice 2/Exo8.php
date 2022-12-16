<h1>Exercice 8</h1>

<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg <br>
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>
<br>
repeterImage($url,4);
<br><br><br><br><br>

<?php

// Afficher une image en php avec une URL
// anti slash avant les " vu qu'on a déjà des "
$img = "<img src=\"http://my.mobirise.com/data/userpic/764.jpg\" </a>";

// Pour une boucle
//  for ($i = 1; $i < 10; $i++) {
    //      echo str_repeat($img, $i);
    // }
    
    // str_repeat pour afficher $img, 4 fois
    //echo str_repeat($img, 4)
    
    $image = 0;
    $nbCopie = 6;
    
    while ($image < $nbCopie) {
        echo $image;
        $image++;
    }
    
    ?>