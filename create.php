<body>
<?php
$title = 'create';
include 'includes/header.php';
?>

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
?>

    <section>
    <!-- Traitement de création d'article -->
    <?php 
    if(isset($_POST['title']) && isset($_POST['image']) && isset($_POST['content'])) {
        $articleStatement = $db->prepare('INSERT INTO articles (title, `image`, content) VALUES (:title, :image, :content)');
        $articleStatement->execute([            
            'title' => $_POST['title'],
            'image' => $_POST['image'],
            'content' => $_POST['content']
        ]);

        header('Location: articles.php');
        exit();
    } 
    ?>

    </section>

    
</body>
</html>