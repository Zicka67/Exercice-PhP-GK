<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui affiche à un utilisateur
    un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 1€.</p>

Affichage:
<br><br>
Montant à payer : 152 €
<br>
Montant versé : 200 €
<br>
Reste à payer : 48 €
<br>
***************************************************
<br>
Rendue de monnaie :
<br>
4 billets de 10 € -1 billet de 5 € -1 pièce de 2 € -1 pièce de 1 €
<br>
Enlever le "s" si il y a qu'un seul billet ou une seule pièce.
<br><br>

récupérer le nombre de billet
<br>
si billet >1 enelever le s
<br><br>

<?php

$aPayer = 152;
$versé = 200;
$aRendre = $versé - $aPayer;
$billets10 = 0;
$billets5 = 0;
$piecede2 = 0;
$piecede1 = 0;

$avecS10 = "billets";
$sansS10   = "billet";

$avecS5 = "billets";
$sansS5  = "billet";

$avecS2 = "pièces";
$sansS2 = "pièce";

$avecS1 = "pièces";
$sansS1 = "pièce";

while ($aRendre >= 1) {
    if ($aRendre >= 10) {
        $billets10 += 1;
        $aRendre -= 10;
        //si aRendre est sup ou égale a 10 on fait $billets10 +1 et $aRendre -10 (vu qu'on enlève un billet de 10 a rendre)
    } elseif ($aRendre >= 5) {
        $billets5 = $billets5 + 1;
        $aRendre = $aRendre - 5;
        //sinon si aRendre est sup ou égale a 5 on fait $billets5 +1 et $aRendre -5 (vu qu'on enlève un billet de 5 a rendre)
    } elseif ($aRendre >= 2) {
        $piecede2 = $piecede2 + 1;
        $aRendre = $aRendre - 2;
        //sinon si aRendre est sup ou égale a 2 on fait $piecede2 +1 et $aRendre -2 (vu qu'on enlève une pièce de 2 a rendre)
    } elseif ($aRendre >= 1) {
        $piecede1 = $piecede1 + 1;
        $aRendre = $aRendre - 1;
        //sinon si aRendre est sup ou égale a 1 on fait $piecede1 +1 et $aRendre -1 (vu qu'on enlève une pièce de 1 a rendre) 
    }
}


echo "Montant à payer : $aPayer";
echo "<br>";
echo "Montant versé : $versé";
echo "<br>";
echo "Reste à payer : $aRendre €";
echo "<br>";
echo "**************************************************";
echo "<br>";
echo "Rendue de monnaie :";
echo "<br>";

$display = " ";

if ($billets10 >= 1) {
    if ($billets10 > 1) {
        $display .= "$billets10 $avecS10 de 10€ ";
    } else {
        $display .= "$billets10 $sansS10 de 10€ ";
    }
}

if ($billets5 = 1) {
    if ($billets5 = 1) {
        $display .= "$billets5 $sansS5 de 5€ ";
    }
}

if ($piecede2 >= 1) {
    if ($piecede2 = 1) {
        $display .= "$piecede2 $avecS2 de 2€ ";
    } else {
        $display .= "$piecede2 $sansS2 de 2€ ";
    }
}

if ($piecede1 = 1) {
    if ($piecede1 = 1) {
        $display .= "$piecede1 $sansS1 de 1€ ";
    }
}

echo $display;
