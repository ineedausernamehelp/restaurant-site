<!DOCTYPE html>
<html lang="en">
<?php
include_once('pages/pdo.php');
//gebruikersnaam admin
//password admin123
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,300;1,400&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include_once('pages/header.php') ?>
    <main class="contact-form-height menu-aanpassen">

        <form action="menu-aanpassen.php" method="post" class="main-wrapper">
            <h2>Menu aanpassen</h2>
            <input type="input" class="kleine-box" name="GerechtID" placeholder="GerechtID Verandert niet">
            <input type="submit" class="submit-knop" value="gerechten-aanpassen">
        </form>
    </main>
    <footer></footer>
</body>

</html>