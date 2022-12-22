<?php

class Genre {
    public $nom;

    public function __construct($nom) 
    {
        $this->nom = $nom;
    }
}

$listGenre = array(
    new Genre('Comédie'),
    new Genre('Action'),
    new Genre('SF'),
    new Genre('Thriller'),
);

// echo '<table>';
// echo '<tr><th>Genre cinématographique</th></tr>';
// foreach ($listGenre as $style) {
//     echo '<tr>';
//     echo '<td>' . $style->nom . '</td>';
//     echo '</tr>';
// }
// echo '</table>';