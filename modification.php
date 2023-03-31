<?php
try
{
    // Connexion à la base de données
	$db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



// On test le paramètre passé dans l'URL
if($_GET['id']){
    $articleNewStatement = $db -> prepare('SELECT * FROM articles WHERE id= :id');
    $articleNewStatement -> execute([
        'id' =>$_GET['id'],
    ]);
    $article = $articleNewStatement -> fetch();
}

if(isset($article)) {
    $id = $article['id'];
    $titleArticle = $article['title'];
    $content = $article['content'];
    $imageLink = $article['image'];
}
?>



<body>
<?php
$title = 'Modification';
include 'includes/header.php';
?>
<section class="modification">
    <form method="post" action="edit.php">
        <input type="hidden" value="<?php echo $id ?>" name="id"/>

        <div class="set-input-title">
            <label for="title">Titre :</label>
            <input class="input-field" type="text" value="<?php echo $titleArticle ?>" name="title"/>
        </div>

        <div class="set-input-img">
            <label for="image">Lien de l'image :</label>
            <input class="input-field" type="text" value="<?php echo $imageLink?>" name="image"/>
        </div>

        <div class="set-input-content">
            <label for="content">Texte :</label>
            <textarea class="input-field" name="content" id="content" rows="10"> 
                <?php echo $content?>
            </textarea>
        </div>

        <input class="input-button button-article" type="submit" value="Poster l'article" />
    
    </form>
</section>


</body>
</html>