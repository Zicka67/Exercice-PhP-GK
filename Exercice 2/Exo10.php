<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
    « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
    <br>
    Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
    de validation (submit).
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
    
    <form action="action.php" method="post">
    <label>Nom &nbsp &nbsp <input type="text" name="nom" /> <br><br>
    <label>Prénom <input type="text" name="prénom" /></p>
    <label>E-mail &nbsp <input type="text" name="e-mail" /> <br><br>
    <label>Ville &nbsp &nbsp <input type="text" name="ville" /> <br><br>
    <label>Sexe &nbsp &nbsp <input type="text" name="sexe" /> <br><br>
    </form>
    
    <label for="formulaire">Intitulé de formation: <br> </label>
    <select name="" id="">

    <?php
    $list = ["Designer web", "Intégrateur", "Chef de projet"];
    
    foreach($list as $civilite) { 
        
        ?>
        
        <option civilite>                             
        <?php echo $civilite; ?>
        </option> 
        <?php
        
    } 
    ?>
    <p><input type="submit" value="Valider"></p>
    </select>
    
    </body>
    
    </html>