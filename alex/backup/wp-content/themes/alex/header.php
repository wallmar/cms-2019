<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    <title>Alex Mayer</title>
</head>
<body class = "Titel">
<header class="header">
    <section class="header__bar">
        <h1><a class="header__logo" href="./index.php">Alex Mayer</a></h1>
        <nav class="header__nav">

            <label class="header__nav-toggle-label" for="toggle-mobile-menu" aria-label="Menu">&#9776;</label>
            <input class="header__nav-toggle-input" id="toggle-mobile-menu" type="checkbox" />

            <ul class="header__list">
                <li><a class="header__link" href="./index.php">Start</a></li>
                <li><a class="header__link" href="#">Leistungen</a></li>
                <li><a class="header__link" href="#">Blog</a></li>
                <li><a class="header__link" href="./about.php">Über mich</a></li>
                <li><a class="header__link" href="#">Kontakt</a></li>
            </ul>
        </nav>
    </section>
