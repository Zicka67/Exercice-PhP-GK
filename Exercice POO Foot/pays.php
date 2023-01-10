<?php


class Pays {
    
    private string $paysNom;
    private $listEquipe;
    
    public function __construct (string $paysNom ) //$equipe)
    {
        $this->paysNom = $paysNom;
        $this->listEquipe = [];
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
    
    public function getListEquipe()
    {
        return $this->listEquipe;
    }
    
    public function setListEquipe($listEquipe): self
    {
        $this->listEquipe = $listEquipe;
        
        return $this;
    }
    
    // *** POUR AJOUTER ET AFFICHER LES AJOUTS ***
    public function addEquipe($equipe)
    {
        $this->listEquipe[] = $equipe;
    }
    
    
    public function afficherEquipe()
    {
        $result = "Equipes du pays $this :" . "<br>";
        foreach($this->listEquipe as $equipe){
            $result .= $equipe . "<br>";
        }
        return $result;
    }
    // ***                                    ***
    
    
    public function __toString()
    {
        return $this->getPaysNom();
    }
    
    
    
    
    
    
    
}