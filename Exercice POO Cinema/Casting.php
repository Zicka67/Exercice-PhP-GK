<?php

class Casting
{
    private $acteur;
    private $role;
    private $film;
    
    public function __construct($acteur, $role, $film) {
        $this->acteur = $acteur;
        $this->role = $role;
        $this->film = $film;
    }
    
    
    public function getActeur()
    {
        return $this->acteur;
    }
    
    public function setActeur($acteur): self
    {
        $this->acteur = $acteur;
        
        return $this;
    }
    
    public function getRole()
    {
        return $this->role;
    }
    
    public function setRole($role): self
    {
        $this->role = $role;
        
        return $this;
    }
    
    public function getFilm()
    {
        return $this->film;
    }
    
    public function setFilm($film): self
    {
        $this->film = $film;
        
        return $this;
    }
    
    
    
    
    
    
    
    
}