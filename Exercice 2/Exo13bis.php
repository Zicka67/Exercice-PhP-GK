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
// aide : https://www.youtube.com/watch?v=CdCuQ6wyWDk
//        https://www.chiny.me/la-poo-en-php-programmation-orientee-objet-8-2.php 

class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private bool $_status;
    private int $_vitesse;
    
    public function __construct($marque, $modele, $nbPortes)
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPortes = $nbPortes;
        $this->_status = false;
        $this->_vitesse = 0;
    }
    // ***********  MARQUE  ************
    public function getMarque()
    {
        return $this->_marque;
    }
    // ***********  MODELE  ************
    public function getModele()
    {
        return $this->_modele;
    }
    // ***********  PORTES  ************
    public function getNbPortes()
    {
        return $this->_nbPortes;
    }
    public function setnbPortes($nbPortes)
    {
        $this->_nbPortes = $nbPortes;
    }
    // ***********  STATUS  ************
    public function getStatus()
    {
        return $this->_status;
    }
    public function setStatus($allumer)
    {
        $this->_status = $allumer;
    }
    // ***********  ACCELERER  ************
    public function accelerer($vitesse)
    {
        // $this->_vitesse += $vitesse;
        $this->setVitesse($this->getVitesse() + $vitesse);
    }
    public function getVitesse()
    {
        return $this->_vitesse;
    }
    public function setVitesse($vitesse)
    {
        $this->_vitesse = $vitesse;
    }
    // ***********  RALENTIR  ************
    public function ralentir($vitesse)
    {
        // $this->_vitesse -= $vitesse;
        $this->setVitesse($this->getVitesse() - $vitesse);
    }
    // ***********  DEMARRER  ************
    public function getDemarrer()
    {
        return $this->_Demarrer;
    }
    public function demarrer()
    {
        if ($this->_status) {
            echo "La voiture est déjà démarrer";
        } else {
            echo "La voiture démarre";
            $this->_status = true;
        }
    }
    // ***********  STOPPER  ************
    public function getStopper()
    {
        return $this->_Stopper;
    }
    public function stopper()
    {
        if (!$this->_status) {
            echo " La voiture est déjà arrêté";
        } else {
            echo " La voiture s'arrête";
            $this->_status = false;
            $this->_vitesse = 0;
        }
    }
}
//*************** Voiture 1 ******************
$vehicule1 = new Voiture("Peugeot", "408", 5);
$vehicule1->demarrer();
$vehicule1->accelerer(50);
var_dump($vehicule1);

//*************** Voiture 2 ******************
$vehicule2 = new Voiture("Citroën", "C4", 3);
$vehicule2->setStatus(false);

var_dump($vehicule2);
