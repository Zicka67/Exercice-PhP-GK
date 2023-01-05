<?php

class Personnage
{
    //On donne des caractéristiques a cet objet Personnage
    private $vie = 40;
    private $atk = 20;
    private $nom;
    
    //Pour construire les paramètres du new Personnage
    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    
    //******************************** CRIER ***********************************
    //Un exemple de function pour ce Personnage
    // public function crier()
    // {
        //     echo "I'M BATMAN !";
        // }
        
        //******************************** REGENERER ***************************
        //Un exemple de function pour ce Personnage
        public function regenerer($vie = null)
        {
            if(is_null($vie))
            {
                $this->vie = 100;
            } else {
                $this->vie = $this->vie + $vie;
            }
        }
        
        //******************************** MORT *******************************
        //Function pour voir si le personnage est mort
        public function mort()
        {
            return $this->vie <= 0;
        }
        
        //******************************** REGENERER **************************      
        
        public function attaquer($cible)
        {
            //$this Attaquant qui utilise cette function
            //$cible La cible mise en paramètre dans index quand on appel la function attaquer
            $cible-> vie -= $this-> atk; //On enlève l'atk de $this( l'attaquant) à la vie de la cible 
        }       
        
        //******************************** VIE ******************************** 
        public function getVie()
        {
            return $this->vie;
        }
        
        public function setVie($vie): self
        {
            $this->vie = $vie;
            
            return $this;
        }
        
        //******************************** ATK ******************************** 
        public function getAtk()
        {
            return $this->atk;
        }
        
        public function setAtk($atk): self
        {
            $this->atk = $atk;
            
            return $this;
        }
        
        //******************************** NOM ******************************** 
        public function getNom()
        {
            return $this->nom;
        }
        
        public function setNom($nom): self
        {
            $this->nom = $nom;
            
            return $this;
        }
        
        
    }
    
    
    
    ?>
    
