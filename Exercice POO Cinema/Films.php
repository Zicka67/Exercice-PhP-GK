<?php

class Film
{
    private string $titre;
    private string $dtSortie;
    private int $duree;
    private string $realisateur; //heritage de la class realisateur ?
    private string $genre; //heritage de la class genre ?
    
    
    public function __construct(string $titre, string $dtsortie, int $duree, Realisateur $realisateur, Genre $genre)
    {
        $this->titre = $titre;
        $this->dtSortie = $dtSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genre->addGenre($this);
    }
    
    
    
    
    
    
    
    
} 