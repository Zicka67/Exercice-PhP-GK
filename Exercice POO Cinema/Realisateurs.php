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
    
    public static function afficherFilmoRea($films, $nomRea){ //Passer en paramètre $films et $nomRea. Pour que la function prenne $films de l'index
        
        // Parcourir les films et vérifier si le getNom du getRealisateur == au $nomRea mit en paramètre dans la function
        foreach ($films as $film) {
            if ($film->getRealisateur()->getNom() == $nomRea) {
                //Affiche le titre
                echo $film->getTitre() . "<br>";
            }
        }
        
        
    }
    
    
}   