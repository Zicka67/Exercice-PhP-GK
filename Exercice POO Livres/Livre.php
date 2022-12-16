

<?php
//titre
//nbPages
//dtParution
//prix
//auteur (nom, prenom)

class Livre
{
    private Auteur $_auteur;
    private string $_titre;
    private int $_dtParution;
    private int $_nbPages;
    private int $_prix;
    
    public function __construct(Auteur $_auteur, string $_titre, int $_dtParution, int $_nbPages, int $_prix)
    {
        $this->_auteur = $_auteur;
        $this->_titre = $_titre;
        $this->_dtParution = $_dtParution;
        $this->_nbPages = $_nbPages;
        $this->_prix = $_prix;
        // faire appel aux livres dans addLivre dans _auteur
        $this->_auteur->addLivre($this); 
    }
    
    // ************  PRIX **************
    
    public function get_prix()
    {
        return $this->_prix;
    }
    
    public function set_prix($_prix)
    {
        $this->_prix = $_prix;
        
        return $this;
    }
    
    // ************  NBPAGES **************
    public function get_nbPages()
    {
        return $this->_nbPages;
    }
    
    public function set_nbPages($_nbPages)
    {
        $this->_nbPages = $_nbPages;
        
        return $this;
    }
    
    // ************  DTPARUTION **************
    public function get_dtParution()
    {
        return $this->_dtParution;
    }
    
    public function set_dtParution($_dtParution)
    {
        $this->_dtParution = $_dtParution;
        
        return $this;
    }
    
    // ************  TITRE **************
    public function get_titre()
    {
        return $this->_titre;
    }
    
    public function set_titre($_titre)
    {
        $this->_titre = $_titre;
        
        return $this;
    }
    // ************  AUTEUR **************
    function getAuteur()
    {
        return $this->_auteur;
    }
    
}




?>

