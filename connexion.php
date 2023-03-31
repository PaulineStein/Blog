<?php
$title = 'connexion';
include 'includes/header.php';
?>

<body>
    <section class="connexion">
        <form method="post" action="loginform.php">
            <div class="set-input-name">
                <label for="name">Nom d'utilisateurice :</label>
                <input class="input-field" type="text" name="name"/>
            </div>

            <div class="set-input-password">
                <label for="password">Mot de passe :</label>
                <input class="input-field" type="password" name="password"/>
            </div>

            <input class="input-button" type="submit" value="Connexion" />
        </form>

        <div class="connexion-info">
            <?php 
            if (!array_key_exists('connected', $_SESSION)) {
                echo '';
            } elseif ((array_key_exists('connected', $_SESSION)) && ($_SESSION['connected'] == false)) {
                echo '! Nom d\'utilisateurice ou mot de passe incorrect !';
            }
            ?>
        </div>
        
    </section>

   
</body>
</html>