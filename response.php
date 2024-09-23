<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Response</title>
</head>
<body>
<?php
    // Récupération des couleurs depuis le formulaire
    if (isset($_POST['text']) and ($_POST['background'])) {
        $colorText = $_POST['text'];
        $colorBackground = $_POST['background'];

        // Définir des cookies pour les couleurs, avec une expiration de 3 minutes
        setcookie("colorText", $colorText, time() + 180);
        setcookie("colorBackground", $colorBackground, time() + 180);

        // Rediriger vers la page formulaire.php
        header("Location: formulaire.php");
        exit(); // S'assurer que le script s'arrête ici après la redirection
    }
    else {
        echo "Les couleurs n'ont pas été définies.";
    }
?>
</body>
</html>