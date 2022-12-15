<?php

class Auteur
{
    private string $_nom;
    private string $_prenom;
    // private array ;

    public function __construct($nom, $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    public function afficherBibliographie() 
    {
    //Faire que le livre s'ajoute automatiquement dans le tableau de l'auteur.
    }
}

?>
