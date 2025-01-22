<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Mon Eboutique</title>
</head>

<body>
    <header>
        <div id="container">
            <img src="./assets/logo.png" alt="Logo du site" class="logo">
            <h1>
                kleiver consulting
            </h1>
        </div>

        <?php
        if(array_key_exists("user", $_SESSION)):
        ?>
        <div>
            <?php var_dump($_SESSION['user']); ?>
        </div>
        <?php else: ?>
            <a href="?page=connection" class="btn">
                Se connecter
            </a>
        <?php endif; ?>
    </header>