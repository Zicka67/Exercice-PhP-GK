<?php


require "Personne.php";
require "Films.php";
require "Genres.php";
require "Acteurs.php";
require "Realisateurs.php";

//créer des tab ? Et foreach pour parcourir chaque  tab et afficher les genres, acteurs etc..

// $acteur1 = new Acteur("Ford", "Harrison", "Homme", "13-07-1942", "Han solo");
// $acteur2 = new Acteur("Bale", "Christian", "Homme", "30-01-1974", "Batman");
// $acteur3 = new Acteur("Theron", "Charlize", "Femme", "07-08-1975", "Aileen");
// $acteur4 = new Acteur("Chan", "Jackie", "Homme", "07-04-1954", "Jimmy Tong");
//rajouter d'autres acteurs qui ont incarné Batman ( Val Kilmer, George Clooney,) pour la liste des rôles.

$rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944");
$rea2 = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966");
$rea3 = new Realisateur("Jenkins", "Patty", "Femme", "24-07-1971");
$rea4 = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971");

$genre1 = new Genre("Science-fiction");
$genre2 = new Genre("Action");
$genre3 = new Genre("Thriller");
$genre4 = new Genre("Comédie");

$films = [
    $film1 = new Film("Star Wars 1", "13-10-1999", 136, $rea1, $genre1),
    $film2 = new Film("Batman Begins", "16-06-2005", 140, $rea2, $genre2),
    $film3 = new Film("Monster", "14-04-2004", 111, $rea3, $genre3),
    $film4 = new Film("Le Smoking", "25-12-2002", 100, $rea4, $genre4),
    $film5 = new Film("Star Wars 2", "13-10-1999", 136, $rea1, $genre1),
    $film6 = new Film("Batman Returns", "16-06-2005", 140, $rea2, $genre2),
    $film7 = new Film("Le Smoking 2", "25-12-2002", 100, $rea4, $genre4),
    $film8 = new Film("Star Wars 3", "13-10-1999", 136, $rea1, $genre1),
];

var_dump($film4);

// echo $acteur1->afficherActeur();
Realisateur::afficherFilmoRea("Lucas");
Film::afficherFilmsParGenre($films);

// Genre::afficherGenreFilm();






//*************************************************************************************************************************************************

// $film1 = new Film("Star Wars 1", "13-10-1999", 136, $rea = new Realisateur("Lucas", "George", "Homme", "14-05-1944"), "Sf");
// $film2 = new Film("Batman Begins", "16-06-2005", 140, $rea = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966"), "Action");
// $film3 = new Film("Monster", "14-04-2004", 111, $rea = new Realisateur("Jenkins", "Patty", "Femme", "24-07-1971"), "Thriller");
// $film4 = new Film("Le Smoking", "25-12-2002", 100, $rea = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971"), "Comedie");
// $film5 = new Film("Star Wars 2", "13-10-1999", 136, $rea = new Realisateur("Lucas", "George", "Homme", "14-05-1944"), "Sf");
// $film6 = new Film("Batman Returns", "16-06-2005", 140, $rea = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966"), "Action");
// $film7 = new Film("Le Smoking 2", "25-12-2002", 100, $rea = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971"), "Comedie");
// $film8 = new Film("Star Wars 3", "13-10-1999", 136, $rea = new Realisateur("Lucas", "George", "Homme", "14-05-1944"), "Sf")

?>

























