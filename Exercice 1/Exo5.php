<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. Attention, la valeur générée devra être arrondie à 2 décimales.
    
Affichage: Montant en francs: 100 francs = 15.24 €

</p>


<?php 

//15.24 / 100  = 0.1524
//1 francs = 0.1524 €

$prixfrancs = 100;
$prixeuros = 15.24;
$multipli = $prixfrancs * 0.1524;


echo "Montant en francs: $prixfrancs francs = $multipli euros";


