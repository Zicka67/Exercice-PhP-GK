<?php


class Joueur
{
    private string $nom;
    private string $prenom;
    private string $dtNaissance;
    private $tabJoueur = [];

    public function __construct(string $prenom, string $nom, string $dtNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dtNaissance = $dtNaissance;
        $this->tabJoueur = [];
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDtNaissance()
    {
        return $this->dtNaissance;
    }

    public function setDtNaissance(string $dtNaissance): self
    {
        $this->dtNaissance = $dtNaissance;

        return $this;
    }
    public function __toString()
    {
        return $this->nom . " " . $this->prenom . " " . $this->dtNaissance;
    }

    public function addJoueur($joueur){
        $this->tabJoueur[] = $joueur;
    }

    public function afficherJoueur(){
        
        echo "***  ". $this ." ***<br>";
        foreach($this->tabJoueur as $joueur)
        {
            echo $joueur . "<br>";
            
        }
    }
}