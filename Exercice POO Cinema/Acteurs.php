<?php

class Acteur extends Personne
{
    protected array $acteurs;
    
    public function __construct($nom, $prenom, $sexe, $dtNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dtNaissance);
        $this->acteurs = [];
    }
    
    //****************** ACTEUR ******************
    public function get_acteurs()
    {
        return $this->_acteurs;
    }
    
    public function set_acteurs($_acteurs)
    {
        $this->_acteurs = $_acteurs;
        
        return $this;
    }
    

    // ************  ADDACTEUR **************
    public function addActeur($acteur){
        // Pour ajouter dans un tableau
        $this->_acteurs[]=$acteur;
    }
    
    // ************  AFFICHERACTEUR **************
    public function afficherActeur() 
    {
        foreach ($this->acteurs as $acteur)
        {
            echo $acteur->get_Nom();
            echo $acteur->get_Prenom();
            echo $acteur->get_Sexe();
            echo $acteur->get_DtNaissance();
        }
    }
    
}


