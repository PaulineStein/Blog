<body> 
<?php
$title = 'Suppression';
include 'includes/header.php';

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
}
?>


    <section class="logout">
        <form method="post" action="delete.php">
            <input type="hidden" value="<?php echo $id ?>" name="id"/>

            <h4>
                Êtes-vous sûr.e de vouloir supprimer l'article <?php echo '' ?> ?
            </h4>

            <div class="set-button">
                <input class="input-button" type="submit" name="delationYes" value="Oui" />

                <input class="input-button" type="submit" name="delationNo" value="Non" />
            </div>
            
            
        </form>
    </section>

</body>