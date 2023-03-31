<body>
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
    
    $articleStatement = $db -> prepare('SELECT * FROM articles WHERE id= :id');
    $articleStatement -> execute([
        'id' =>$_GET['id'],
    ]);
    $article = $articleStatement -> fetch();
}

$postContent;



if(isset($article)) {
    $title = $article['title'];
    $content = $article['content'];
    $imageLink = $article['image'];

$postContent = <<<HTML
<section class="article">
    <h3 class="article-title">$title</h3>
    <img class="img-article" src=$imageLink alt="Illustration">
    <p>$content</p>
</section>
HTML;

} else {
    $postContent = '<h3>Désolé.e, une erreur est survenue</h3>';
}


include 'includes/header.php';
echo $postContent


?>
</body>
</html>