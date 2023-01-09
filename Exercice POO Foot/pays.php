<?php


class Pays {

    private string $paysNom;
    // private $equipe;

public function __construct (string $paysNom ) //$equipe)
{
        $this->paysNom = $paysNom;
        // $this->equipe = $equipe;
}

public function getPaysNom(): string
{
    return $this->paysNom;
}

public function setPaysNom(string $paysNom): self
{
    $this->paysNom = $paysNom;

    return $this;
}

// public function getEquipe()
// {
//     return $this->equipe;
// }

// public function setEquipe($equipe): self
// {
//     $this->equipe = $equipe;

//     return $this;
// }



public function __toString()
{
    return $this->paysNom;
}




}