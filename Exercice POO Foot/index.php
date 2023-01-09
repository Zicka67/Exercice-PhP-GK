<?php

require "equipe.php";
require "joueur.php";


$pays1 = new Pays("France");
$pays2 = new Pays("Espagne");
$pays3 = new Pays("Angleterre");
$pays4 = new Pays("Italie");

$club1 = new club("PSG", "1970");
$club2 = new club("RCS", "1906");
$club3 = new club("FC Barcelone", "1899");
$club4 = new club("Real Madrid", "1902");
$club5 = new club("Man United", "1878");
$club6 = new club("Juventus", "1897");

$joueur1 = new joueur("Messi", "Lionel", "1987");
$joueur2 = new joueur("Mbappe", "Kilian", "1998");
$joueur3 = new joueur("Junior", "Neymar", "1998");
$joueur4 = new joueur("Ronaldo", "Cristiano", "1998");
$joueur5 = new joueur("Gameiro", "Kevin", "1987");
$joueur6 = new joueur("Benzema", "Karim", "1987");

$carrier1 = new carriere($club1, $joueur2, "2017");