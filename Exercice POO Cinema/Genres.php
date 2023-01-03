<?php

class Genre {
    private $nom;
    private $tabFilmsGenre = [];
    
    public function __construct($nom)
    {
        $this->nom = $nom;
        $this->tabFilmsGenre = [];
    }
    
    public function getNom()
    {
        return $this->nom;
    }
    
    public function setNom($nom): self
    {
        $this->nom = $nom;
        
        return $this;
    }
    
    public function getTabFilmsGenre()
    {
        return $this->tabFilmsGenre;
    }
    
    
    public function setTabFilmsGenre($tabFilmsGenre): self
    {
        $this->tabFilmsGenre = $tabFilmsGenre;
        
        return $this;
    }
    
    public function addFilm($film){
        $this->tabFilmsGenre [] = $film;
    }
    
    //************* AFFICHERFILMS ****************/
    
    public function afficherFilms(){
        echo "<br>" . "Genre: " . $this->getNom() . "<br>";
        foreach($this->tabFilmsGenre as $film) //On parcourt le tab tabFilmGenre qui appartient à l'objet en cours d'utilisation.
        //$this fait référence à l'objet de la classe Genre, et tabFilmsGenre est un tableau de films appartenant à cet objet de la classe Genre.
        {
            echo "<br>" . "Nom du film : " . $film->getTitre() . "<br>";
        }
    }
    
    
}  







