<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia
de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
<br><br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme:https://fr.wikipedia.org/wiki/
    </p>
    <br><br><br><br><br>
    
    
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    </head>
    
    <body>
    
    <table>
    
    <thead>
    <tr>
    <th>Pays</th>
    <th>Capitale</th>
    <th>Lien wiki</th>
    </tr>
    </thead>
    
    <tbody>
    
    <?php
    
    // asort tri par ordre alphabétique les mots
    // sort tri par ordre les chiffres
    // mb_strtoupper pour mettre en majuscule
    
    
    $tabPaysCapitale = [
        "France" => "Paris",
        "Allemagne" => "Berlin",
        "USA" => "Washington",
        "Italie" => "Rome",
        "Espagne" => "Madrid",
    ];
    asort($tabPaysCapitale);
    
    foreach ($tabPaysCapitale as $pays => $capitale) {
        echo "<tr>",
        "<td> <strong>$pays</strong> <td>",
        "<td> $capitale <td>",
        "<td> <a href='https://fr.wikipedia.org/wiki/$capitale' target=_blank> Lien </a> <td>",
        "</tr>";
    }
    
    
    ?>
    </tbody>
    
    </table>
    
    
    </body>
    
    </html>