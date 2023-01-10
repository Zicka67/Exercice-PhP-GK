<?php

class Nationalite 
{
    
    private $nationalite;
    
    public function __construct($nationalite)
    {
        $this->nationalite = $nationalite;
        $this->listJoueur = [];
    }
    
    public function getNationalite()
    {
        return $this->nationalite;
    }
    
    public function setNationalite($nationalite): self
    {
        $this->nationalite = $nationalite;
        
        return $this;
    }
    
    public function addJoueur($joueur)
    {
        $this->listJoueur[] = $joueur;
    }
    
    public function afficherNationalite()
    {
        $result = "Les joueurs de nationalité $this sont:" . "<br>";
        foreach($this->listJoueur as $joueur){
            $result .= $joueur . "<br>";   // .= (concaténation) ajoute le nom du joueur dans la variable $result
        }
        return $result;
    }
    
    public function __toString()
    {
        return $this->afficherNationalite();
    }
    
    
    
    
    
    
    
    
    
    
    
}