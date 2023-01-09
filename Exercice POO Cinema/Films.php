<?php


class Film 
{
    protected string $titre;
    protected $dtSortie;
    protected $duree;
    protected $realisateur;
    protected $genre;
    private $casting;
    
    public function __construct($titre, $dtSortie, $duree, $realisateur, $genre) {
        $this->titre = $titre;
        $this->dtSortie = $dtSortie;
        $this->duree = $duree;
        $this->realisateur = $realisateur;
        $this->realisateur->addFilm($this); //test
        $this->genre = $genre;
        $this->casting = [];
        
        
        $this->realisateur->addFilm($this);
        $this->genre->addFilm($this);
        
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
    
    //************** GENRE **************
    public function getGenre()
    {
        echo " <br>*** Le film " . $this . " appartient au genre : " . $this->genre . "***";
    }
    
    public function setGenre($genre): self
    { 
        $this->genre = $genre;
        
        return $this;
    }
    
    //***************** GETDESCRIPTION ****************
    public function getDescription()
    {
        echo "<br>". "<br> *** Description de " . $this->getTitre() . " *** " .  ":<br>" . $this->titre . " est un film de genre " . $this->genre . " " . "réalisé par " . $this->realisateur . " et est sortie le " . $this->dtSortie  .  "<br> Durée : " . $this->duree . " minutes. <br>";
        foreach ($this->casting as $casting) 
        {
            echo $casting->getActeur()->getPrenom() . " " . $casting->getActeur()->getNom() ." a joué ". $casting->getRole(). " dans ce film. <br>";
        }
    }
    
    //***************** ADDCASTING ****************
    public function addCasting($Casting){ 
        $this->casting[] = $Casting;
    }
    
    //***************** INFOCASTINGS ****************
    public function infoCasting()
    {
        echo "<br>" . "*** Dans le film ". $this->getTitre() ." le casting est le suivant ***: <br>";
        foreach ($this->casting as $casting) 
        {
            echo $casting->getActeur()->getPrenom() . " " . $casting->getActeur()->getNom() ." a joué ". $casting->getRole(). "<br>";
        }
    }
    
    public function __toString()
    {
        return $this->titre;
    }
    
    
    
    
}