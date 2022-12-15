<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends) 
    de la classe Voiture et qui a une propriété supplémentaire (autonomie).
    Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes: <br>
    Peugeot 408: $v1 = new Voiture("Peugeot","408"); <br>
    BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);<br> <br>
    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante: <br>
    echo $v1->getInfos()."<br/>"; <br>
    echo $ve1->getInfos()."<br/>";<br>
</p>
<br>

<br><br><br><br><br>


<?php

// *************** CLASSE PARENT ***************
class Voiture 
{
    private string $_marque;
    private string $_modele;

    public function __construct(string $marque, string $modele)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    public function get_marque()
    {
        return $this->_marque;
    }
     
    public function set_marque($_marque)
    {
        $this->_marque = $_marque;
        return $this;
    }

}

// *************** CLASSE ENFANT ***************
class VoitureElec extends Voiture 
{
    private string $_autonomie;

    public function __construct(string $_marque, string $_modele, string $autonomie)
    {
        parent::__construct($_marque, $_modele);
        $this->_autonomie = $autonomie;
    }
   
    // public function get_marque()
    // {
    //     return $this->_marque;
    // }

    // public function set_marque($_marque)
    // {
    //     $this->_marque = $_marque;
    //     return $this;
    // }

    // public function get_modele()
    // {
    //     return $this->_modele;
    // }

    // public function set_modele($_modele)
    // {
    //     $this->_modele = $_modele;

    //     return $this;
    
    public function get_autonomie()
    {
        return $this->_autonomie;
    }

    public function set_autonomie($auto)
    {
        $this->_autonomie = $auto;
        return $this;
    }

}

$voiture1 = new Voiture ("Peugeot","408");
$voiture2 = new VoitureElec ("BMW","I3","100");
$voiture2->set_autonomie(100);

var_dump($voiture1, $voiture2);

