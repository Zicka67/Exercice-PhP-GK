<?php


class Equipe
{
    private $equipeNom;
    private $joueur;

    public function __construct($equipeNom,$joueur)
    {
        $this->equipeNom = $equipeNom;
        $this->joueur = $joueur;
    }

    public function getEquipeNom()
    {
        return $this->equipeNom;
    }

    public function setEquipeNom($equipeNom): self
    {
        $this->equipeNom = $equipeNom;

        return $this;
    }

    public function getJoueur()
    {
        return $this->joueur;
    }

    public function setJoueur($joueur): self
    {
        $this->joueur = $joueur;

        return $this;
    }




















    
}