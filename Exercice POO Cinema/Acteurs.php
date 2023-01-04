
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
        return $this->acteurs;
    }
    
    public function set_acteurs($_acteurs)
    {
        $this->acteurs = $_acteurs;
        
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
    
    
    // ************  ADDROLE **************
    
    public function addRole($role) {
        $this->role[] = $role;
    }
    
    
    // ************  ADDACTEUR **************
    public function addActeur($acteur){
        // Pour ajouter dans un tableau
        $this->acteurs[]=$acteur;
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
    
    //************* AFFICHERROLE ****************/
    
    public function afficherRoles() {
        echo "Acteur : " . $this->prenom . " " . $this->nom . "<br>"; //ici $this est l'acteur qu'on souhaite afficher ( exemple dans l'index $acteur6->afficherRoles();)
        echo "Rôle : " . $this->role . "<br>"; //ici $this est l'acteur qu'on souhaite afficher ( exemple dans l'index $acteur6->afficherRoles();)
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    // public static function afficherRolesParActeur($acteurs, $nomActeur) {
        
        //     $roleParActeur = []; //Création d'un tab vide
        
        //     foreach ($acteurs as $acteur) { //Pour chaque $acteur dans $acteurs
            //         if ($acteur->getNom() == $nomActeur) { // Si le nom de l'acteur correspond au nom recherché ( ici $nomActeur)
                //             $roleParActeur[] = $acteur->getRole();  // Ajouter son rôle au tableau
                //         }
                //     }
                
                //     $test = implode($roleParActeur); // Pour convertir un tableau en string 
                //     echo $test . " ";
                
                //     // *************** OU ****************
                
                //     foreach($roleParActeur as $role){
                    //         echo $role . "<br>";
                    //     }
                    
                    // }
                    
                    // // *****************************
                    
                    // public static function ActeursParRole($acteurs, $role) {
                        //     $acteursParRole = [];
                        //     foreach ($acteurs as $acteur) {
                            //         if ($acteur->getRole() == $role) {
                                //             $acteursParRole[] = $acteur->getPrenom() . " " . $acteur->getNom();
                                //         }
                                //     }
                                //     return implode(', ', $acteursParRole);
                                // }
                                
                                
                                
                                
                                
                                
                                
                            }