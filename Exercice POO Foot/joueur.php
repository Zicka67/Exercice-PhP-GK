<?php


class Joueur
{
    private string $nom;
    private string $prenom;
    private string $dtNaissance;

    public function __construct(string $nom,string $prenom,string $dtNaissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dtNaissance = $dtNaissance;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDtNaissance()
    {
        return $this->dtNaissance;
    }

    public function setDtNaissance($dtNaissance): self
    {
        $this->dtNaissance = $dtNaissance;

        return $this;
    }


}