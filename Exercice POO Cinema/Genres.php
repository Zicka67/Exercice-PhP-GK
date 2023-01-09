<?php

class Genre {
    private string $nom;
    private $tabFilmsGenre;
    
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
    
    //************* ADDFILM ****************
    public function addFilm($film){
        $this->tabFilmsGenre [] = $film;
    }
    
    // ************* GETGenres ****************
    public function listGenre()
    {
        echo "<br> <br> *** Les films du genre " . $this . " sont: ***";
        foreach ($this->tabFilmsGenre as $film)
        {
            echo $film->getTitre() ." - " ; // ne fonctionne pas. Pas de film dans le tab ?
        }
    }
    
    public function __toString()
    {
        return $this->nom;
    }
  
}  







