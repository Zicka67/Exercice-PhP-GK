<h1>fqfz</h1>
<?php

Class Ordinateur{

    private $_marque;

    public function __construct($marque){
        $this->_marque = $marque;
    }
}
$poste = new Ordinateur("Samsung");

