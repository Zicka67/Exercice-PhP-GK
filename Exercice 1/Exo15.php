<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
    Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
    <br>
    $p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
    $p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;
</p>
<br><br><br><br><br>

<?php

class Personne
{
    private $_nom;
    private $_prenom;

    private $_dtNaissance;

    public function __construct($nom, $prenom, $dtNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dtNaissance = $dtNaissance;
    }

    public function calcAge()
    {
        $dtAujourdhui = date("Y-m-d");
        $diff = date_diff(date_create($this->_dtNaissance), date_create($dtAujourdhui));
        echo  $this->_nom ." " . $this->_prenom. " " .$diff->format('%y ans'). "<br>"; 
    }
}

// $dtNaissance = "19-02-1980";
// $dtAujourdhui = date("Y-m-d");
// $diff = date_diff(date_create($dtNaissance), date_create($dtAujourdhui));



$personne1 = new Personne("DUPONT", "Michel", "1980-02-19");
$personne2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

var_dump($personne1, $personne2);
$personne1->calcAge();
$personne2->calcAge();


?>