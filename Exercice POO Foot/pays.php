<?php


class Pays {

    private string $paysNom;

public function __construct (string $paysNom)
{
        $this->paysNom = $paysNom;
}

public function __toString()
{
    return $this->paysNom;
}

}