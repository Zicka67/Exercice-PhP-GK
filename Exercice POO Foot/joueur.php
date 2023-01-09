<?php


class Joueur
{
    private string $nom;
    private string $prenom;
    private string $dtNaissance;
    private $tabJoueur;
    // private $carriere;
    private $clubs;

    public function __construct(string $prenom, string $nom, string $dtNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dtNaissance = $dtNaissance;
        $this->tabJoueur = [];
        // $this->carriere = [];
        $this->clubs = [];
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

    public function setClubs($clubs): self
    {
        $this->clubs = $clubs;

        return $this;
    }

 
    public function __toString()
    {
        return $this->nom . " " . $this->prenom . " " . $this->dtNaissance;
    }

    //****** ADDJOUEUR ******
    public function addJoueur($joueur){
        $this->tabJoueur[] = $joueur;
    }

    //****** AFFICHERJOUEUR ******
    public function afficherJoueur(){
        
        echo "***  ". $this ." ***<br>";
        foreach($this->tabJoueur as $joueur)
        {
            echo $joueur . "<br>";
        }
    
    }

    // ****** ADDCLUB ******
    public function addClub($club)
    {
        $this->clubs[] = $club;
    }

    //****** GETCLUB ******
    public function getClubs()
    {
        foreach ($this->clubs as $club) {
            $result .= $club->getNom() . "<br>";
        }
        echo $result =  "Le joueur " . $this . " fait parti de : $club <br>";
    }

    // public function infoCarriere()
    // {
    //     echo "<br>" . "*** Le joueur ". $this->getNom() ." joue dans l'équipe : " . $this->getClubs(). "***" . ": <br>";
    //     foreach ($this->carriere as $carriere) 
    //     {
    //         echo $carriere->getJoueur()->getPrenom() . " " . $carriere->getJoueur()->getNom() ." joue dans le club :" . $club->getClubNom(). "<br>";
    //     }
    // }


}