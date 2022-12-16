<?php

class Auteur
{
    private string $_nom;
    private string $_prenom;
    private array $_listeLivres;
    
    public function __construct($nom, $prenom)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_listeLivres = [];
    }
    
    // ************  NOM **************
    public function get_nom()
    {
        return $this->_nom;
    }
    
    public function set_nom($_nom)
    {
        $this->_nom = $_nom;
        
        return $this;
    }
    
    // ************  PRENOM **************
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
        // var_dump($this->_listeLivres);
        foreach ($this->_listeLivres as $livre)
        {
           echo "<br> " . $livre->get_titre() . "&nbsp";
           echo "(" .$livre->get_dtParution() . ") : ";
           echo $livre->get_nbPages() . " pages ". " / ";
           echo $livre->get_prix() . " €";
        }
    }
    
    // ************      **************
    public function __toString()
    {
        return $this->_prenom . " " . $this-> _nom;
    }
    
    // ************  LISTELIVRES **************
    public function get_listeLivres()
    {
        return $this->_listeLivres;
    }
    
    public function set_listeLivres($_listeLivres)
    {
        $this->_listeLivres = $_listeLivres;
        
        return $this;
    }

    // ************  ADDLIVRE **************
    public function addLivre($livre){
        // var_dump($livre);
        // Pour ajouter dans un tableau
        $this->_listeLivres[]=$livre;
    }
}

?>
