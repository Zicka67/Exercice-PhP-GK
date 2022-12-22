<?php

class Film {
    private $titre;
    private $dtSortie;
    private $duree;
    private $realisateur;
    
    public function __construct($titre, $dtSortie, $duree, Realisateur $realisateur) {
        $this->titre = $titre;
        $this->dateSortie = $dtSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
    }
    
    //************** TITRE **************
    public function getTitre()
    {
        return $this->titre;
    }
    
    public function setTitre($titre): self
    {
        $this->titre = $titre;
        
        return $this;
    }
    //************** DTSORTIE **************
    public function getDtSortie()
    {
        return $this->dtSortie;
    }
    
    public function setDtSortie($dtSortie): self
    {
        $this->dtSortie = $dtSortie;
        
        return $this;
    }
    //************** DUREE **************
    public function getDuree()
    {
        return $this->duree;
    }
    
    public function setDuree($duree): self
    {
        $this->duree = $duree;
        
        return $this;
    }
    //************** REALISATEUR **************
    public function getRealisateur()
    {
        return $this->realisateur;
    }
    
    public function setRealisateur($realisateur): self
    {
        $this->realisateur = $realisateur;
        
        return $this;
    }

}