<body> 
<?php
$title = 'Déconnexion';
include 'includes/header.php';
?>

    <section class="logout">
        <form method="post" action="traitement.php">
            <h4>
                Êtes-vous sûr.e de vouloir vous déconnecter ?
            </h4>

            <div class="set-button">
                <input class="input-button" type="submit" name="yes" value="Oui" />

                <input class="input-button" type="submit" name="no" value="Non" />
            </div>
            
            
        </form>
    </section>

</body>