<body>
<?php
$title = 'Création';
include 'includes/header.php';
?>
<section class="creation">
    <form method="post" action="create.php">

        <div class="set-input-title">
            <label for="title">Titre :</label>
            <input class="input-field" type="text" name="title"/>
        </div>

        <div class="set-input-img">
            <label for="image">Lien de l'image :</label>
            <input class="input-field" type="text" name="image"/>
        </div>

        <div class="set-input-content">
            <label for="content">Texte :</label>
            <input class="input-field" type="text" name="content"/>
        </div>

        <input class="input-button button-article" type="submit" value="Poster l'article" />
    
    </form>
</section>


</body>
</html>