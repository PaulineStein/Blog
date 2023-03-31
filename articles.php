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

$myQuery = 'SELECT * FROM articles ORDER BY id DESC';
$articlesStatement = $db->prepare($myQuery);
$articlesStatement->execute();
$articles = $articlesStatement->fetchAll();
?>


<body>

<?php
$title = 'articles';
include 'includes/header.php';
?>

    <section class="article-set">

    <?php 
    if(isset($_SESSION['connected']) && $_SESSION['connected'] == true){
        echo '<h4> <a class="edit-link" href="creation.php">+ Créer un nouvel article</a></h4>';
    };
    ?>

        
        
        <?php foreach ($articles as $article) {
        $articleId = $article['id'];
        $title = $article['title'];
        $content = $article['content'];
        $imageLink = $article['image'];?>

        <li class="card">
            <img class="preview-img" src="<?php echo $imageLink; ?>" alt="Illustration article">

            <div class="card-text-set">
                <h4> <?php echo($title); ?> </h4>
                <!-- <p class="preview-content"> <?php //echo $content; ?></p> -->

                <p class="preview-content"> <?php echo implode(' ', array_slice(explode(' ', $content), 0, 20)) . '...'; ?></p>

                
                <?php 
                if(!isset($_SESSION['connected']) || $_SESSION['connected'] == false){
                    echo '<p class="preview-link"><a href="article.php?id=' . $articleId . '">Lire plus</a></p>';
                }
                ?>
            </div>

            <?php 
            if(isset($_SESSION['connected']) && $_SESSION['connected'] == true) { ?>
                <nav class="set-action">
                <a href="modification.php?id= <?= $articleId ?>"> <img class="icon" src="img/editer.svg" alt=""> </a>
                <a href="delation.php?id= <?= $articleId ?>"> <img class="icon" src="img/poubelle.svg" alt=""> </a>
            </nav>
            <?php } ?>

            
            </li> <?php } ?>
            
    </section>

    
</body>
</html>