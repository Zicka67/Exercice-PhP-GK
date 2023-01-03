<?php

class Acteur extends Personne
{
    protected array $acteurs;
    private string $role;
    
    public function __construct($nom, $prenom, $sexe, $dtNaissance, $role)
    {
        parent::__construct($nom, $prenom, $sexe, $dtNaissance);
        $this->acteurs = [];
        $this->role = $role;
        
    }
    
    //****************** ACTEUR ******************
    public function get_acteurs()
    {
        return $this->_acteurs;
    }
    
    public function set_acteurs($_acteurs)
    {
        $this->_acteurs = $_acteurs;
        
        return $this;
    }
    
    //****************** ROLE ******************
    public function getRole()
    {
        return $this->role;
    }
    
    public function setRole($role): self
    {
        $this->role = $role;
        
        return $this;
    }
    
    
    // ************  ADDACTEUR **************
    public function addActeur($acteur){
        // Pour ajouter dans un tableau
        $this->_acteurs[]=$acteur;
    }
    
    // ************  AFFICHERACTEUR **************
    public function afficherActeur() 
    {
        foreach ($this->acteurs as $acteur)
        {
            echo $acteur->get_Nom();
            echo $acteur->get_Prenom();
            echo $acteur->get_Sexe();
            echo $acteur->get_DtNaissance();
        }
    }
    
    //créer un tab 
    //parcourir le tab acteurs
    //pour chaque acteur dans acteurs
    //afficher son rôle
    
    
    public static function afficherRoleParActeur($acteurs) {
        $roleParActeur = []; //Création d'un tab vide
        foreach ($acteurs as $acteur) { //Pour chaque $acteur dans $acteurs
            $role = $acteur->getRole(); // On prend le role de l'acteur et il va être = a $role
            if (!isset($roleParActeur[$role])) { // si le role dans le tab n'existe pas dans $roleParActeur 
                $roleParActeur[$role] = []; // On l'ajoute dedans
            }
            $roleParActeur[$role][] = $acteur;//ajoute l'acteur au tab $roleParActeur associé a don role
        }
        foreach ($roleParActeur as $role => $acteurs) {
            // Affichage du rôle
            echo "<br>" . $role . "<br>";
            // Affichage de la liste d'acteurs ayant ce rôle
            foreach ($acteurs as $acteur) {
                echo "- " . $acteur->getPrenom() . " " . $acteur->getNom() . "<br>";
            }
            echo "<br>";
            
        }
    }
}