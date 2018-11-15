<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 8</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 8</h1>
            <p>Créer 3 variables.<br />Dans la première mettre le résultat de l'opération 3 + 4.<br />Dans la deuxième mettre le résultat de l'opération 5 * 20.<br />Dans la troisième mettre le résultat de l'opération 45 / 5.<br />Afficher le contenu des variables.</p>
        </div>
        <div>
            <p><?php
                $number1 = 3 + 4;
                $number2 = 5 * 20;
                $number3 = 45 / 5;
                echo 'Résultat 1 : ' . $number1 . '<br />Résultat 2 : ' . $number2 . '<br />Résultat 3 : ' . $number3;
            ?></p>
        </div>
    </body>
</html>
