<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur),
    dire bonjour aux différentes personnes dans leur langue respective (français ➔«Salut», anglais ➔«Hello», espagnol ➔«Hola»)</p>
<br>
Exemple: tableau ➔Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
<br><br>
Affichage:
<br><br>
Salut Mickaël
<br>
Hola Virgile
<br>
Hello Marie-Claire
<br><br><br><br>

<?php

$tabPrenomLang = [
    "Mickael" => "FRA", "Virgile" => "ESP", "Marie-Claire" => "ENG"
];



foreach ($tabPrenomLang as $prenom => $lang) {   // pour chaque prenom (ex:mickael) qui a pour langue (ex:FRA) dans la var tabPrenomLang, plusieurs cas possible.
    switch ($lang) {
        case "FRA":
            echo "Bonjour $prenom <br>";
            break;
        case "ESP":
            echo "Hola $prenom <br>";
            break;
        case "ENG":
            echo "Hello $prenom <br>";
    }
}

