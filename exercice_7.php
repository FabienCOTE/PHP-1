<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <div>
            <h1>Exercice 7</h1>
            <p>Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.<br />Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".</p>
        </div>
        <div>
            <?php
            $lastName = 'Côté';
            $firstName = 'Fabien';
            $age = 29;
            ?>
            <p>Bonjour <?= $firstName; ?> <?= $lastName; ?>, tu as <?= $age; ?> ans.</p>
        </div>
    </body>
</html>
