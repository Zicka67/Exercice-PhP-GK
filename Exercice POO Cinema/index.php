<?php

// spl_autoload_register(function ($class_name) {
    
    //     require_once $class_name . '.php';
    // });
    
    require "Films.php";
    require "Genres.php";
    require "Acteurs.php";
    require "Realisateurs.php";
    
    // $genre1 = new Genre("Science-fiction");
    // $genre2 = new Genre("Action");
    // $genre3 = new Genre("Thriller");
    // $genre4 = new Genre("Comédie");
    
    // $rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944");
    // $rea2 = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966");
    // $rea3 = new Realisateur("Jenkins", "Patty", "Femme", "24-07-1971");
    // $rea4 = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971");
    
    // $acteur1 = new Acteur("Ford", "Harrison", "Homme", "13-07-1942", "Han solo");
    // $acteur2 = new Acteur("Bale", "Christian", "Homme", "30-01-1974", "Batman");
    // $acteur3 = new Acteur("Theron", "Charlize", "Femme", "07-08-1975", "Aileen");
    // $acteur4 = new Acteur("Chan", "Jackie", "Homme", "07-04-1954", "Jimmy Tong");
    
    $films = [
        $film1 = new Film("Star Wars 1", "13-10-1999", 136, $rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944")),
        $film2 = new Film("Batman Begins", "16-06-2005", 140, $rea2 = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966")),
        $film3 = new Film("Monster", "14-04-2004", 111, $rea3 = new Realisateur("Jenkins", "Patty", "Femme", "24-07-1971")),
        $film4 = new Film("Le Smoking", "25-12-2002", 100, $rea4 = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971")),
        $film5 = new Film("Star Wars 2", "13-10-1999", 136, $rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944")),
        $film6 = new Film("Batman Returns", "16-06-2005", 140, $rea2 = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966")),
        $film7 = new Film("Le Smoking 2", "25-12-2002", 100, $rea4 = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971")),
        $film8 = new Film("Star Wars 3", "13-10-1999", 136, $rea1 = new Realisateur("Lucas", "George", "Homme", "14-05-1944")),
    ];
    
    //Afficher les infos de chaque films
    foreach ($films as $film) {
        echo "Titre: " . $film->getTitre();
        echo "<br>" . " Date de sortie: " . $film->getDtSortie();
        echo " Durée: " . $film->getDuree() . " min";
        echo " Réalisateur: " . $film->getRealisateur()->getPrenom() . " " . $film->getRealisateur()->getNom();
        echo " Sexe: " . $film->getRealisateur()->getSexe();
        echo " Date de naissance: " . $film->getRealisateur()->getDtNaissance() . "<br>";
        echo "<br>";
    }
    

    //********************** Afficher la filmographie d'un Realisateur **********************
    //variable de recherche
    $nomRea = "Lucas";
    
    //Parcourir les films et vérifier si le getNom == a $nomRea
    foreach ($films as $film) {
        if ($film->getRealisateur()->getNom() == $nomRea) {
            //Affiche le titre
            echo $film->getTitre() . "<br>";
        }
    }
    
    // function filmographieRea($films, $rea)
    // {
    //     $filmographieRea = [];
    //     foreach ($films as $film) {
    //         if ($film->getRealisateur() === $rea) {
    //             $filmographieRea[] = $film;
    //         }
    //     }
    //     return $filmographieRea;
    // }
    
    // $rea = $rea1;
    // $filmographieRea = filmographieRea($films, $rea);
    
    
    // foreach ($filmographieRea as $film) {
    //         echo $film->getTitre() . "\n";
    // }
