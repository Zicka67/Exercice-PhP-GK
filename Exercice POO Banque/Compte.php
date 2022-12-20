<?php
class Compte 
{
    private string $_libelle;
    //float pour les chiffres a virgules
    //int pour les chiffres entiers
    private float $_soldeInit; //int ?
    private string $_devise;
    private Titulaire $_titulaireCompte;



    public function __construct($libelle, $soldeInit, $devise, Titulaire $titulaireCompte)
{
    $this->_libelle = $libelle;
    $this->_soldeInit = $soldeInit;
    $this->_devise = $devise;
    $this->_titulaireCompte = $titulaireCompte;
    // Faire appel aux comptes dans addCompte dans _titulaireCompte
    $this->_titulaireCompte->addCompte($this);
}

//*********** LIBELLE ***********
    public function get_libelle()
    {
        return $this->_libelle;
    }

    public function set_libelle($_libelle)
    {
        $this->_libelle = $_libelle;

        return $this;
    }

    //*********** SOLDEINIT ***********
    public function get_soldeInit()
    {
        return $this->_soldeInit;
    }

    public function set_soldeInit($_soldeInit)
    {
        $this->_soldeInit = $_soldeInit;

        return $this;
    }

    //*********** DEVISE ***********
    public function get_devise()
    {
        return $this->_devise;
    }

    public function set_devise($_devise)
    {
        $this->_devise = $_devise;

        return $this;
    }

    //*********** TITULAIRECOMPTE ***********
    public function get_titulaireCompte()
    {
        return $this->_titulaireCompte;
    }

    public function set_titulaireCompte($_titulaireCompte)
    {
        $this->_titulaireCompte = $_titulaireCompte;

        return $this;
    }

    //*********** CREDITER ***********
    public function crediter($montant) 
    {
        //Pour additioner  
        $this->_soldeInit += $montant;
    }

    //*********** DEBITER ***********
    public function debiter($montant)
    {
        //Pour soustraire
        $this->_soldeInit -= $montant;
    }



    //*********** VIREMENT ***********
    public function virement($montant, Compte $compte) {
        $this->debiter($montant);
        $compte->crediter($montant);
    }

    public function __toString() {
        return "$this->_libelle($this->_soldeInit $this->_devise)"; 
    }

    
}










?>