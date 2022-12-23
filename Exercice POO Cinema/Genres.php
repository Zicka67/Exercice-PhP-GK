<?php

class Genre {
    private $genre;
    private $nom;
    
    public function __construct($nom) //faire hériter genre de la class film et rajouter le genre ?
    {
        $this->nom = $nom;
    }
    
    public function getGenre()
    {
        return $this->genre;
    }
    
    public function setGenre($genre): self
    {
        $this->genre = $genre;
        
        return $this;
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
}  







