<?php

require "club.php";
require "joueur.php";
require "carriere.php";
require "pays.php";

$pays1 = new Pays("France");
$pays2 = new Pays("Espagne");
$pays3 = new Pays("Angleterre");
$pays4 = new Pays("Italie");

$joueur1 = new Joueur("Messi", "Lionel", "1987");
$joueur2 = new Joueur("Mbappe", "Kilian", "1998");
$joueur3 = new Joueur("Junior", "Neymar", "1998");
$joueur4 = new Joueur("Ronaldo", "Cristiano", "1998");
$joueur5 = new Joueur("Gameiro", "Kevin", "1987");
$joueur6 = new Joueur("Benzema", "Karim", "1987");

$club1 = new Club("PSG", "$pays1", "1970");
$club2 = new Club("RCS", "$pays1", "1906");
$club3 = new Club("FC Barcelone", "$pays2", "1899");
$club4 = new Club("Real Madrid", "$pays2", "1902");
$club5 = new Club("Man United", "$pays3", "1878");
$club6 = new Club("Juventus", "$pays4", "1897");


$carrier1 = new Carriere($club1, $joueur2, "2017");
$carrier2 = new Carriere($club2, $joueur5, "2005");
$carrier3 = new Carriere($club3, $joueur3, "2013");
$carrier4 = new Carriere($club4, $joueur6, "2017");
$carrier5 = new Carriere($club5, $joueur4, "2003");
$carrier6 = new Carriere($club6, $joueur4, "2018");
$carrier7 = new Carriere($club3, $joueur1, "2001");
$carrier8 = new carriere($club1, $joueur1, "2021");
$carrier9 = new Carriere($club1, $joueur3, "2017");

var_dump($club1);
echo "<br><br>";
$joueur1->afficherJoueur();





