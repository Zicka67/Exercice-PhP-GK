<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>
<br>
Affichage(si la date courante est le 21/05/2018 et la date de naissance le 17/01/1985:
<br><br>
Age de la personne: 33 ans 4 mois 4 jours
<br><br><br><br>

<?php   


$dateNaissance = "24-03-1989";
$dateAujourdhui = date("Y-m-d");
$diff = date_diff(date_create($dateNaissance), date_create($dateAujourdhui));
echo 'Age de la personne: '.$diff->format('%y ans' . ' ' . '%m mois' . ' ' . '%d jours');


//$dateAujourdhui = [21, 05 , 2018];
//$dateNaissance = [17, 01, 1985];

//$ageJour = abs(($dateAujourdhui[0]) - abs($dateNaissance[0]));
//$ageMois = abs(($dateAujourdhui[1]) - abs($dateNaissance[1]));
//$ageAnnee = abs(($dateAujourdhui[2]) -  abs($dateNaissance[2]));


//echo "Age de la personne: $ageAnnee ans $ageMois mois $ageJour jours";

//Donne la valeur absolue du nbr
//echo abs($ageJour);