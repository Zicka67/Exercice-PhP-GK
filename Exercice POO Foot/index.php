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
$carrier2 = new carriere($club2, $joueur5, "2005");
$carrier3 = new carriere($club3, $joueur3, "2013");
$carrier4 = new carriere($club4, $joueur6, "2017");
$carrier5 = new carriere($club5, $joueur4, "2003");
$carrier6 = new carriere($club6, $joueur4, "2018");
$carrier7 = new carriere($club3, $joueur1, "2001");
$carrier8 = new carriere($club1, $joueur1, "2021");
$carrier9 = new carriere($club1, $joueur3, "2017");
