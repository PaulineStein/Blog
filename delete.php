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
    if(isset($_POST['delationYes'])) {
        $updateStatement = $db->prepare('DELETE FROM `articles` WHERE id= :id');
        $updateStatement->execute([
            'id' => (int)$_POST['id']
        ]);

        header('Location: articles.php');
        exit();
    } elseif (isset($_POST['delationNo'])) {
        header('Location: articles.php');
        exit();
    }
    ?>

    </section>

</body>
</html>