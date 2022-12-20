<?php
class Titulaire
{
    private string $_nom;
    private string $_prenom;
    private string $_dtNaissance;
    private string $_ville;
    private string $_allComptes;

    public function __construct($nom, $prenom, $dtNaissance, $ville, $allComptes)
{
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_dtNaissance = $dtNaissance;
    $this->_ville = $ville;
    $this->_allComptes = $allComptes;
}
//********** NOM ***********    

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    //********** PRENOM ***********    
    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    //********** DTNAISSANCE ***********    
    public function get_dtNaissance()
    {
        return $this->_dtNaissance;
    }

    public function set_dtNaissance($_dtNaissance)
    {
        $this->_dtNaissance = $_dtNaissance;

        return $this;
    }

    //********** VILLE ***********    
    public function get_ville()
    {
        return $this->_ville;
    }

    public function set_ville($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }

    //********** ALLCOMPTES ***********    
    public function get_allComptes()
    {
        return $this->_allComptes;
    }

    public function set_allComptes($_allComptes)
    {
        $this->_allComptes = $_allComptes;

        return $this;
    }
}
