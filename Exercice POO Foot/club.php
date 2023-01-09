<?php


class Club
{
    private $clubNom;
    private $pays;
    private $joueur;
    private $dtCrea;

    public function __construct($clubNom, $pays, $joueur, $dtCrea)
    {
        $this->clubNom = $clubNom;
        $this->pays = $pays;
        $this->joueur = $joueur;
        $this->dtCrea = $dtCrea;

    }

    public function getClubNom()
    {
        return $this->clubNom;
    }

    public function setClubNom($clubNom): self
    {
        $this->clubNom = $clubNom;

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays($pays): self
    {
        $this->pays = $pays;

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

    public function getDtCrea()
    {
        return $this->dtCrea;
    }

    public function setDtCrea($dtCrea): self
    {
        $this->dtCrea = $dtCrea;

        return $this;
    }








 
}