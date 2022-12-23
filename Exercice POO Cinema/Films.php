<?php


class Film 
{
    protected $titre;
    protected $dtSortie;
    protected $duree;
    protected $realisateur;
    protected $genre;
    
    public function __construct($titre, $dtSortie, $duree, Realisateur $realisateur, $genre) {
        $this->titre = $titre;
        $this->dtSortie = $dtSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        
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
    
    //************** REALISATEUR **************
    public function getGenre()
    {
        return $this->genre;
    }
    
    
    public function setGenre($genre): self
    {
        $this->genre = $genre;
        
        return $this;
    }
    
    public static function afficherFilmsParGenre($films) {
        // Création du tableau qui associe chaque genre à la liste de films qui lui correspond
        $filmsParGenre = [];
        foreach ($films as $film) {
            $nomGenre = $film->getGenre()->getNom();
            if (!isset($filmsParGenre[$nomGenre])) {
                $filmsParGenre[$nomGenre] = [];
            }
            $filmsParGenre[$nomGenre][] = $film;
        }
        foreach ($filmsParGenre as $nomGenre => $films) {
      // Affichage du nom du genre
      echo "<br>" . $nomGenre . "<br>";
      // Affichage de la liste de films du genre
      foreach ($films as $film) {
        echo "- " . $film->getTitre() . "<br>";
      }
      echo "<br>";
    }
    }
}