<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="La Formule 1 en 2024">
        <meta name="author" content="Thomas IANNICCA">
        <script src="https://kit.fontawesome.com/55c005e3d9.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?= $baseUri ?>/assets/css/global.css">
        <title>Formule 1 2023 : les équipes</title>
    </head>

    <header class ="header">
            <figure>
                <a href="<?= $altorouter->generate('route_home') ?>">
                    <img src="<?= $baseUri ?>/assets/img/f1_logo.png" alt="Logo de la Formule 1">
                </a>
            </figure>

            <nav class="header_nav">
                <ul>
                    <li><a href="<?= $altorouter->generate('route_home') ?>">Accueil</a></li>
                    <li><a href="<?= $altorouter->generate('route_teams-menu') ?>">Equipes</a></li>
                    <li><a href="<?= $altorouter->generate('route_ranking') ?>">Classement</a></li>
                </ul>
            </nav>

            <img class="burger-menu" src="<?= $baseUri ?>/assets/icons/menu.png" alt="">
        </header>
