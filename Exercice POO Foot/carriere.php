<?php


class Carriere
{
    private $equipeNom;
    private $joueur;
    private $dtArrivee;

    public function __construct($equipeNom, $joueur, $dtArrivee)
    {
        $this->equipeNom = $equipeNom;
        // $this->equipeNom->addCarrie:

        $this->joueur = $joueur;
        // $this->joueur->addCarriere($this);

        $this->dtArrivee = $dtArrivee;
        // $this->dtArrivee->addCarriere($this);
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

    public function getDtArrivee()
    {
        return $this->dtArrivee;
    }

    public function setDtArrivee($DtArrivee): self
    {
        $this->dtArrivee = $DtArrivee;

        return $this;
    }

}