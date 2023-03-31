<?php session_start() ?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG</title>
    
    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/helper.css">
</head>


<header>
    <div class="title-set">
        <h1><a href="index.php">Blog</a></h1>

        <h2>—
        <?php 
        echo $title; 
        ?> —
        </h2>
    </div>

    <nav class="menu-set">
        <li class="menu"><a href="index.php"> Accueil</a></li>
        <li class="menu"><a href="articles.php"> Articles</a></li>
        
        <?php
        if(!isset($_SESSION['connected']) || $_SESSION['connected'] == false){
            echo' <li class="menu"><a href="connexion.php"> Connexion </a></li>';
        } else {
            echo '<li class="menu"><a href="logout.php"> Deconnexion</a></li>';
        }
        ?>
    </nav>
</header>