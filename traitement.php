<body>
<?php
$title = 'traitement';
include 'includes/header.php';
?>

    <section>
    <!-- Traitement de déconnexion -->
    <?php
    if(array_key_exists('yes', $_POST) && $_POST['yes'] == 'Oui'){
        // $_SESSION['connected'] = false;
        unset($_SESSION['connected']);
        header('Location: index.php');
        exit();
    } else {
        header('Location: index.php');
        exit();
    };
    ?>

    </section>

    
</body>
</html>