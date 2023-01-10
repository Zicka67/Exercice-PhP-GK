<?php

require "club.php";
require "joueur.php";
require "carriere.php";
require "pays.php";
require "nationalite.php";

$fr = new Nationalite("Fr");
$arg = new Nationalite("Ar");
$br = new Nationalite("Br");
$port = new Nationalite("Pt");

$france = new Pays("France");
$espagne = new Pays("Espagne");
$angleterre = new Pays("Angleterre");
$italie = new Pays("Italie");

$messi = new Joueur("Messi", "Lionel", "1987", "$fr", "$psg");
$mbappe = new Joueur("Mbappe", "Kilian", "1998", "$fr", "$psg");
$neymar = new Joueur("Junior", "Neymar", "1998", "$br", "$psg");
$ronaldo = new Joueur("Ronaldo", "Cristiano", "1998", "$port", "$manU");
$gameiro = new Joueur("Gameiro", "Kevin", "1987", "$fr", "$rcs");
$benzema = new Joueur("Benzema", "Karim", "1987", "$fr", "$real");

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


echo "<br><br>";
var_dump($ronaldo);
echo "<br><br>";

print_r($carriere1);





