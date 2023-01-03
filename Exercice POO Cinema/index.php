<?php


require "Personne.php";
require "Films.php";
require "Genres.php";
require "Acteurs.php";
require "Realisateurs.php";
require "Role.php";
Require "Casting.php";


$acteur1 = new Acteur("Ford", "Harrison", "Homme", "13-07-1942", "Han solo"); // ajouter le film pour lister sa filmographie
$acteur2 = new Acteur("Bale", "Christian", "Homme", "30-01-1974", "Batman");
$acteur3 = new Acteur("Theron", "Charlize", "Femme", "07-08-1975", "Aileen");
$acteur4 = new Acteur("Chan", "Jackie", "Homme", "07-04-1954", "Jimmy Tong");
$acteur5 = new Acteur("Kilmer", "Val", "Homme", "31-12-1959", "Batman");
$acteur6 = new Acteur("Clooney", "George", "Homme", "06-05-1961", "Batman");


$rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944");
$rea2 = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966");
$rea3 = new Realisateur("Jenkins", "Patty", "Femme", "24-07-1971");
$rea4 = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971");


$genre1 = new Genre("Science-fiction");
$genre2 = new Genre("Action");
$genre3 = new Genre("Thriller");
$genre4 = new Genre("Comédie");


$film1 = new Film("Star Wars 1", "13-10-1999", 136, $rea1, $genre1); // Rajouter l'acteur pour lister sa filmographie 
$film2 = new Film("Batman Begins", "16-06-2005", 140, $rea2, $genre2);
$film3 = new Film("Monster", "14-04-2004", 111, $rea3, $genre3);
$film4 = new Film("Le Smoking", "25-12-2002", 100, $rea4, $genre4);
$film5 = new Film("Star Wars 2", "13-10-1999", 136, $rea1, $genre1);
$film6 = new Film("Batman Returns", "16-06-2005", 140, $rea2, $genre2);
$film7 = new Film("Le Smoking 2", "25-12-2002", 100, $rea4, $genre4);
$film8 = new Film("Star Wars 3", "13-10-1999", 136, $rea1, $genre1);

// $casting1 = new casting(film, acteur, role);
$rea1->afficherFilmo();
$genre1->afficherFilms();
echo "<br>";
$acteur1->afficherRoles();










// $films = [
    //     $film1 = new Film("Star Wars 1", "13-10-1999", 136, $rea1, $genre1),
    //     $film2 = new Film("Batman Begins", "16-06-2005", 140, $rea2, $genre2),
    //     $film3 = new Film("Monster", "14-04-2004", 111, $rea3, $genre3),
    //     $film4 = new Film("Le Smoking", "25-12-2002", 100, $rea4, $genre4),
    //     $film5 = new Film("Star Wars 2", "13-10-1999", 136, $rea1, $genre1),
    //     $film6 = new Film("Batman Returns", "16-06-2005", 140, $rea2, $genre2),
    //     $film7 = new Film("Le Smoking 2", "25-12-2002", 100, $rea4, $genre4),
    //     $film8 = new Film("Star Wars 3", "13-10-1999", 136, $rea1, $genre1),
    // ];
    
    // Realisateur::afficherFilmoRea($films, "Lucas");
    // Film::afficherFilmsParGenre($films);
    // echo "<br>" . Acteur::ActeursParRole($acteurs, "Batman");
    // Acteur::afficherRolesParActeur($acteurs, "Ford");
    // acteur::afficherFilmoActeur($films, $nomActeur);
    
    
    
    
    
    
    
    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
