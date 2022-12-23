<?php


class Realisateur extends Personne
{
    private $tableauFilms = [];
    
    public function __construct($nom, $prenom, $sexe, $dtNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dtNaissance);
    }
    
    public function getlistFilms(): array
    {
        return $this->listFilms;
    }
    
    public function setlistFilms(array $listFilms): self
    {
        $this->listFilms = $listFilms;
        
        return $this;
    }
    
    public static function afficherFilmoRea($nomRea){ //Passer en paramètre $nomRea(qui va être ici notre variable pour 
        //choisir le nom qu'on souhaite chercher et indiquer le nom souhaiter en paramètre dans l'index)
        $films = [
            $film = new Film("Star Wars 1", "13-10-1999", 136, $rea = new Realisateur("Lucas", "George", "Homme", "14-05-1944"), "Sf"),
            $film = new Film("Batman Begins", "16-06-2005", 140, $rea = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966"), "Action"),
            $film = new Film("Monster", "14-04-2004", 111, $rea = new Realisateur("Jenkins", "Patty", "Femme", "24-07-1971"), "Thriller"),
            $film = new Film("Le Smoking", "25-12-2002", 100, $rea = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971"), "Comedie"),
            $film = new Film("Star Wars 2", "13-10-1999", 136, $rea = new Realisateur("Lucas", "George", "Homme", "14-05-1944"), "Sf"),
            $film = new Film("Batman Returns", "16-06-2005", 140, $rea = new Realisateur("Reeves", "Matt", "Homme", "27-04-1966"), "Action"),
            $film = new Film("Le Smoking 2", "25-12-2002", 100, $rea = new Realisateur("Donovan", "Kevin", "Homme", "17-12-1971"), "Comedie"),
            $film = new Film("Star Wars 3", "13-10-1999", 136, $rea = new Realisateur("Lucas", "George", "Homme", "14-05-1944"), "Sf"),
        ];        
        
        // ********************** Afficher la filmographie d'un Realisateur **********************
        // variable de recherche
        // $nomRea = "Lucas";
        
        // Parcourir les films et vérifier si le getNom du getRealisateur == au $nomRea mit en paramètre dans la function
        foreach ($films as $film) {
            if ($film->getRealisateur()->getNom() == $nomRea) {
                //Affiche le titre
                echo $film->getTitre() . "<br>";
            }
        }
        
        
    }
    
    
}   