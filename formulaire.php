<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
    <style>
        /* The body is targeted to change the background color of the entire page */
        body {
            background-color: <?php
            if (isset($_COOKIE['colorBackground'])) {
                echo $_COOKIE['colorBackground'];
            }
            else {
                echo "white";
            }
            ?>;
        }
        /* The "p" and labels are targeted to change the text color of paragraphs */
        p, label {
            color : <?php
            if (isset($_COOKIE['colorText'])) {
                echo $_COOKIE['colorText'];
            }
            else {
                echo "black";
            }
            ?>
        }
    </style>
</head>
<body>
    <p>Veuillez remplir le formulaire</p>
    <form action="response.php" method="POST">
        <label>Couleur du texte : <input type="color" name="text" required></label><br>
        <label>Couleur du fond : <input type="color" name="background" required"></label><br>
        <br><input type="submit" value="OK">
    </form>
</body>
</html>
