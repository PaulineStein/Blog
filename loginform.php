<body>
<?php
$title = 'traitement';
include 'includes/header.php';
?>

    <section>
    <!-- Traitement de connexion -->
    <?php
    if($_POST['name'] === 'abc' && $_POST['password'] === 'abc') {
        $_SESSION['connected'] = true;
        header('Location: index.php');
        exit();
    } else {
        $_SESSION['connected'] = false;
        header('Location: connexion.php');
        exit();
    };
    ?>

    </section>

    
</body>
</html>