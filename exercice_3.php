<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 3</h1>
            <p>Créer une variable km. L'initialiser à 1. Afficher son contenu.<br />Changer sa valeur par 3. Afficher son contenu.<br />Changer sa valeur par 125. Afficher son contenu.</p>
        </div>
        <div>
            <p>
                <?php
                $km = 1;
                echo $km;
                ?>
                <br />
                <?php
                $km = 3;
                echo $km;
                ?>
                <br />
                <?php
                $km = 125;
                echo $km;
                ?>
            </p>
        </div>
    </body>
</html>
