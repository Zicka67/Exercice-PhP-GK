<?php

spl_autoload_register(function ($class_name) {
    
    require_once $class_name . '.php';
});

$film2 = new Film("Star Wars 1", "13-10-1999", 136, $rea1, $genre1);
$film1 = new Film("Batman Begins", "16-06-2005", 140, $rea2, $genre2);
$film3 = new Film("Monster", "14-04-2004", 111, $rea3, $genre3);
$film4 = new Film("Le Smoking", "25-12-2002", 100, $rea4, $genre4);

$genre1 = new Genre("Science-fiction");
$genre2 = new Genre("Action");
$genre3 = new Genre("Thriller");
$genre4 = new Genre("Comédie");

$rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944");
$rea2 = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966");
$rea3 = new Realisateur("Jenkins", "Patty", "femme", "24-07-1971");
$rea4 = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971");