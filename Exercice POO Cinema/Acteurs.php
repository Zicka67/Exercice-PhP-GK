<?php

class Acteur
{
    private string $nom;
    private string $prenom;
    private string $sexe;
    private string $dtNaissance;
    protected array $role;
    
    
    public function __construct($nom, $prenom, $sexe, $dtNaissance, $role)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dtNaissance = $dtNaissance;
        // $this->role = [];
    }
    //********************** NOM **********************
    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

     //********************** PRENOM **********************
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
     //********************** SEXE **********************
    public function getSexe(): string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

     //********************** DTNAISSANCE **********************
    public function getDtNaissance()
    {
        return $this->dtNaissance;
    }

    public function setDtNaissance(DateTime $dtNaissance): self
    {
        $this->dtNaissance = $dtNaissance;

        return $this;
    }

     //********************** ROLE **********************
    public function getRole(): array
    {
        return $this->role;
    }

    public function setRole(array $role): self
    {
        $this->role = $role;

        return $this;
    }
}   

