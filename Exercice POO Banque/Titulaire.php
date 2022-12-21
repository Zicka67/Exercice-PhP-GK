<?php
class Titulaire
{
    private string $_nom;
    private string $_prenom;
    private DateTime $_dtNaissance;
    private string $_ville;
    private array $_allComptes;
    
    // création de construct (ne pas mettre allComptes, il sera ajouter ailleurs)
    public function __construct($nom, $prenom, $dtNaissance, $ville)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dtNaissance = new DateTime($dtNaissance);
        $this->_ville = $ville;
        $this->_allComptes = [];
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
    
    
    //****************** AGE ***************
    public function getAge()
    {
        return date_diff(new DateTime(), $this->_dtNaissance)->format("%Y");
    }
    
    //****************** ADD COMPTE ***************
    public function addCompte($compte)
    {
        $this->_allComptes[] = $compte;
        echo "Le $compte est ajouté.<br>";
    }
    
    
    public function afficherComptes() 
    {
        foreach ($this->_allComptes as $compte)
        {
            echo "<br>" . $compte . "<br>";
        }
    }
    
    //*****************************************************
    public function __toString() 
    {
        return "<strong>$this->_prenom $this->_nom</strong>"." (".$this->getAge()." ans)";
    }
}
