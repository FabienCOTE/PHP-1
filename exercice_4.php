<!DOCTYPE html>
<html  lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 4</h1>
            <p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.<br />Les afficher.</p>
        </div>
        <div>
            <?php
            $string = 'Variable String';
            $int = 12;
            $float = 10.98;
            $booleanT = true;
            $booleanF = false;
            ?>
            <p>Variable de type string : <?= $string; ?><br />Variable de type int : <?= $int; ?><br />Variable de type float : <?= $float; ?><br />Variable de type booléan (true) : <?= $booleanT; ?><br />Variable de type booléan (false) : <?= $booleanF; ?>
            </p>
        </div>
    </body>
</html>
