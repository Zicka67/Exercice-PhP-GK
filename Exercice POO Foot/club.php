<?php


class Club
{
    private $clubNom;
    private $dtCrea;

    public function __construct($clubNom, $dtCrea)
    {
        $this->clubNom = $clubNom;
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