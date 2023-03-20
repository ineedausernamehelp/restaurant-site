<?php

?>
<!DOCTYPE html>
<html lang="en">

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
    <?php include_once('pages/header.php'); 
          include_once('pages/pdo.php');
    ?>

    <main class="contact-form-height">
        <form action="contact.php" method="post" class="main-wrapper">
            <h2>neem contact op</h2>
            <input type="reden voor contact" class="kleine-box" placeholder="reden voor contact">
            <input type="naam" class="kleine-box" placeholder="naam">
            <input type="email" class="kleine-box" placeholder="email">
            <input type="feedback" class="grote-box" placeholder="uw bericht">
            <input type="submit" class="submit-knop">
        </form>
    </main>

</body>


</html>