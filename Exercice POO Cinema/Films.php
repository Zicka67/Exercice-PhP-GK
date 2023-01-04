<?php


class Film 
{
    protected $titre;
    protected $dtSortie;
    protected $duree;
    protected $realisateur;
    protected $genre;
    
    public function __construct($titre, $dtSortie, $duree, $realisateur, $genre) {
        $this->titre = $titre;
        $this->dtSortie = $dtSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;

        $this->setGenre($genre);
        $this->realisateur->addFilm($this);
        
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
    
    
    public function setGenre($genre)
    {
        $this->genre = $genre;
        $genre->addFilm($this); // permet de lier chaque film a son genre.
        //setGenre définit le genre d'un film. Et prend en para un objet de type "genre". Elle affecte cet objet a l'attribut "$genre" de l'objet "film".
        //Elle appel la méthode addfilm de l'objet $genre et ajoute l'ojet Film en cours ($this) au tableau $tabFilmGenre de l'objet Genre
    }
    

















    //Créer la function qui a commme paramètre le tableau $films
    // public static function afficherFilmsParGenre($films) {
        
    //     $filmsParGenre = [];// Création du tableau vide
        
    //     foreach ($films as $film) { //Pour chaque film dans le tableau $films
    //         $nomGenre = $film->getGenre()->getNom(); //On prend le nom du genre dans $film et il va être = a $nomGenre
    //         if (!isset($filmsParGenre[$nomGenre])) { //!isset vérifie si le genre dans le tab n'existe pas dans $filmsPArGenre 
    //             $filmsParGenre[$nomGenre] = []; // 
    //         }
    //         //ajoute un film au tableau $filmParGenre dans la liste associé a $nomGenre(type de films). [] on ajoute les films dans un tableau vide.
    //         $filmsParGenre[$nomGenre][] = $film;
    //     }
    //     foreach ($filmsParGenre as $nomGenre => $films) {
    //         // Affichage du nom du genre
    //         echo "<br>" . $nomGenre . "<br>";
    //         // Affichage de la liste de films du genre
    //         foreach ($films as $film) {
    //             echo "- " . $film->getTitre() . "<br>";
    //         }
    //         echo "<br>";
    //     }
    // }
}