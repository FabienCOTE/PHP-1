<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 2</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Ecercice 2</h1>
            <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier. Afficher leur contenu.</p>
        </div>
        <div>
            <p><?php
                $lastName = 'Côté';
                $firstName = 'Fabien';
                $age = 29;
                echo $firstName . ' ' . $lastName . ' à ' . $age . ' ans.';
            ?></p>
        </div>
    </body>
</html>
