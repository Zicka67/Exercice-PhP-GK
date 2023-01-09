<?php

require "club.php";
require "joueur.php";
require "carriere.php";
require "pays.php";

$france = new Pays("France");
$espagne = new Pays("Espagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");

$messi = new Joueur("Messi", "Lionel", "1987");
$mbappe = new Joueur("Mbappe", "Kilian", "1998");
$neymar = new Joueur("Junior", "Neymar", "1998");
$ronaldo = new Joueur("Ronaldo", "Cristiano", "1998");
$gameiro = new Joueur("Gameiro", "Kevin", "1987");
$benzema = new Joueur("Benzema", "Karim", "1987");

$psg = new Club("PSG", $france, "1970");
$rcs = new Club("RCS", $france, "1906");
$real = new Club("FC Barcelone", $espagne, "1899");
$barca = new Club("Real Madrid", $espagne, "1902");
$manU = new Club("Man United", $angleterre, "1878");
$juv = new Club("Juventus", $italie, "1897");


$carriere1 = new Carriere($psg, $mbappe, "2017");
$carriere2 = new Carriere($rcs, $gameiro, "2005");
$carriere3 = new Carriere($real, $neymar, "2013");
$carriere4 = new Carriere($barca, $benzema, "2017");
$carriere5 = new Carriere($manU, $ronaldo, "2003");
$carriere6 = new Carriere($juv, $ronaldo, "2018");
$carriere7 = new Carriere($real, $messi, "2001");
$carriere8 = new carriere($psg, $messi, "2021");
$carriere9 = new Carriere($psg, $neymar, "2017");

$ronaldo->afficherJoueur();
echo "<br><br>";
var_dump($ronaldo);
echo "<br><br>";
$messi->getClubs();
print_r($carriere1);





