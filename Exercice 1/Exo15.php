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
    private string $_nom;
    private string $_prenom;
    private DateTime $_dtNaissance;

    public function __construct(string $nom, string $prenom, string $dtNaissance)
    {
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dtNaissance = new DateTime($dtNaissance);
    }

    public function calcAge()
    {
        $dtAujourdhui = date("Y-m-d");
        $diff = date_diff($this->_dtNaissance, date_create($dtAujourdhui));
        return $diff->format('%y ans'). "<br>"; 
    }

    public function __toString() {
        return $this->_prenom." ".$this->_nom." a ".$this->calcAge();
    }
// ***********  NOM  ************
    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;
        return $this;
    }
// ***********  PRENOM  ************
    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_nom = $_prenom;
        return $this;
    }
// ***********  dtNaissance  ************
    public function get_dtNaissance()
    {
        return $this->_dtNaissance;
    }

    public function set_dtNaissance($_dtNaissance)
    {
        $this->_dtNaissance = $_dtNaissance;
        return $this;
    }

}

// ou 
// $dtNaissance = "19-02-1980";
// $dtAujourdhui = date("Y-m-d");
// $diff = date_diff(date_create($dtNaissance), date_create($dtAujourdhui));

$personne1 = new Personne("DUPONT", "Michel", "1980-02-19");
$personne2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");

var_dump($personne1, $personne2);
// echo $personne1->calcAge();
// echo $personne2->calcAge();

echo $personne1;
echo $personne2;


?>