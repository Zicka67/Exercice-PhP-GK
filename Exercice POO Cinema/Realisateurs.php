<?php


class Realisateur extends Personne
{
    private $tableauFilms = [];
    
    
    public function __construct($nom, $prenom, $sexe, $dtNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dtNaissance);
        $this->tableauFilms = [];
    }
    
    
    public function getTableauFilms()
    {
        return $this->tableauFilms;
    }
    
    public function setTableauFilms($tableauFilms): self
    {
        $this->tableauFilms = $tableauFilms;
        
        return $this;
    }
    
    //************* ADDFILM ****************/
    
    public function addFilm($film){
        $this->tableauFilms[] = $film;
    }
    
    //************* AFFICHERFILMO ****************/
    
    public function afficherFilmo(){
        
        echo "*** Films réalisés par ". $this ." : ***<br>";
        foreach($this->tableauFilms as $film)
        {
            echo $film . "<br>";
            
        }
    }
    
    public function __toString()
    {
        return $this->prenom . " " . $this->nom;
    }
    
    
    
    
}