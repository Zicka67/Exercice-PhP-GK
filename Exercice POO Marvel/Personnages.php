<?php

class Personnage
{
    //On donne des caractéristiques a cet objet Personnage
    public $vie = 100;
    public $atk = 20;
    public $nom;
    
    //Pour construire les paramètres du new Personnage
    public function __construct($nom)
    {
        $this->nom = $nom;
    }
    
    //Un exemple de function pour ce Personnage
    // public function crier()
    // {
        //     echo "I'M BATMAN !";
        // }
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
        
        //Function pour voir si le personnage est mort
        public function mort()
        {
            return $this->vie <= 0;
        }
        
        //         ou
        
        // public function mort()
        // {
            //     if($this->vie <= 0) 
            //     {
                //         echo "$this->nom est mort ";
                //     }
                // }
                
                
                
                
                
                
                
                
                
                
            }
            
            
            
            ?>
            
