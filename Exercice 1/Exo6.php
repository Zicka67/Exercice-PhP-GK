<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex: 20 % -> 0.2)

Affichage: Prix unitaire de l’article: 9.99 € Quantité: 5 Taux de TVA: 0.2 Le montant de la facture à régler est de : 59.94 €

</p>



<?php 

$prixunitaire = 9.99;
$quantité = 5;
$tva = 0.2;

$facture = ($prixunitaire + ($prixunitaire * $tva)) * $quantité;


echo "Prix unitaire de l’article: $prixunitaire";
echo "<br>";    
echo "Quantité: $quantité";
echo "<br>";    
echo "Taux de TVA: $tva";
echo "<br>";
echo "Le montant de la facture à régler est de : $facture";
