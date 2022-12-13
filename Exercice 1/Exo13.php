<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). 
Elle devra être affichée avec 2 décimales.</p>
<br><br>
Affichage:
<br><br>
Les notes obtenues par l’élève sont: 10 12 8 19 3 16 11 13 9
<br>
Sa moyenne générale est donc de: 11.22
<br><br><br><br>

<?php  

//$eleve = [
    //    "notes" => [10, 12, 8, 19, 3, 16, 11, 13, 9],
    //    "" => "",
    //];
    
    $eleve = [10, 12, 8, 19, 3, 16, 11, 13, 9];
    //pour avoir la moyenne
    $moyenne = array_sum($eleve) / count($eleve);
    
    //pour compter le nombre de note
    //echo count($eleve);
    
    //pour compter le résultat des notes
    //echo array_sum($eleve);  
    
    echo "Les notes obtenues par l’élève sont:"  . '   ' .  implode("&nbsp",$eleve);
    //print_r($eleve);
    echo "<br>";
    echo "Sa moyenne générale est donc de:"  . '   ' .  number_format($moyenne, 2);
    implode("&nbsp",$eleve);
    
