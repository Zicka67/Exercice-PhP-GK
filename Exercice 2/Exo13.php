<h1>Exercice 13</h1>

<p>Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et
    vitesseActuelle ainsi que les méthodes status( ), accelerer( ) et stopper( ) en plus
    des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un
    véhicule. <br> <br>
    v1 ➔ "Peugeot","408",5 <br>
    v2 ➔ "Citroën","C4",3 <br>
<p>Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de
    tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments
    suivants :
</p>
<br><br><br><br><br>

</p>

<?php

// Class Voiture{
//     private $_marque;
//     private $_modele;
//     private $nbPortes;

//     public function __construct($marque, $modele){
//         $this->_marque = $marque;
//         $this->_modele = $modele;
//     }
//     public function getMarque(){
//         return $this->_marque;
//     }
//     public function getmodele(){
//         return $this->_modele;
//     }
//     public function setmodele($speed){
//         $this->_modele = $speed;
//     }
// }

// $vehicule1 = new Voiture("Peugeot", 408);
// $vehicule1->setmodele(408);
// echo "Nom et modèle du véhicule: ". $vehicule1->getmarque(). " " . $vehicule1->getmodele(); 

class Voiture
{
    private $_marque;
    private $_modele;
    private $_nbPortes;
    private $_status;

    public function __construct($marque)
    {
        $this->_marque = $marque;
    }
    public function modele($modele)
    {
        $this->_modele = $modele;
    }
    public function GetNbPortes($nbPortes)
    {
        return $this->_nbPortes;
        // $this->_nbPortes = $nbPortes;
    }
    public function setStatus($status)
    {
        $this->_status = ($status);
    }
    public function accelerer()
    {
    }
    public function stopper()
    {
    }
}

$vehicule1 = new Voiture("Peugeot", "408", "5");
$vehicule1->setStatus(1);
// echo "Nom et modèle du véhicule:". $vehicule1->$marque();


$vehicule2 = new voiture("Citroën", "C4", "3");
$vehicule2->setStatus(0);

var_dump($vehicule1, $vehicule2);
