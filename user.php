<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exercice 4 Partie 7</title>
</head>

<body>
    <h1>Welcome</h1>

    <?php
    if (isset($_POST['Nom']) && isset($_POST['Prenom'])) : ?>
        <?= 'Bonjour' . ' ' . $_POST['Nom'] . ' ' . $_POST['Prenom']; ?>
    <?php endif ?>

</body>

</html>