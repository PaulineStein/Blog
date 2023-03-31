<body>
<?php
// $title = 'edit';
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
?>

    <section>
    <!-- Traitement de modification d'article -->
    <?php 
    if(isset($_POST['title']) && isset($_POST['image']) && isset($_POST['content']) && isset($_POST['id'])) {
        $updateStatement = $db->prepare('UPDATE articles SET title = :title, image = :image, content= :content WHERE id= :id');
        $updateStatement->execute([
            'id' => $_POST['id'],
            'title' => $_POST['title'],
            'image' => $_POST['image'],
            'content' => $_POST['content']
        ]);

        header('Location: article.php?id=' . $_POST['id']);
        exit();
    } 
    ?>
    </section>

</body>
</html>