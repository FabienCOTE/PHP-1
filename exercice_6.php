<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exerice 6</h1>
            <p>Créer une variable name et l'initialiser avec la valeur de votre choix.<br />Afficher : "Bonjour" + name + ", comment vas tu ?".</p>
        </div>
        <div>
            <p>
                <?php
                $name = 'Fabien';
                echo 'Bonjour ' . $name . ', comment vas tu ?';
                ?>
            </p>
        </div>
    </body>
</html>
