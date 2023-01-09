<?php


class Club
{
    private string $clubNom;
    private string $pays;
    private string $dtCrea;

    public function __construct(string $clubNom, string $pays, string $dtCrea)
    {
        $this->clubNom = $clubNom;
        $this->pays = $pays;
        $this->dtCrea = $dtCrea;

    }

    public function getClubNom()
    {
        return $this->clubNom;
    }

    public function setClubNom(string $clubNom): self
    {
        $this->clubNom = $clubNom;

        return $this;
    }

    public function getPays()
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getDtCrea()
    {
        return $this->dtCrea;
    }

    public function setDtCrea(string $dtCrea): self
    {
        $this->dtCrea = $dtCrea;

        return $this;
    }








 
}