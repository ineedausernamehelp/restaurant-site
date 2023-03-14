<?php
//if (isset($_POST["username"]) && isset($_POST["password"])) {
// if ($_POST["username"] == "bozo" && $_POST["password"] == "123") {
//    echo "succes";
//}
//}



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
    <header class="header-margin">
        <a href="index.php">
            <img src="img/logo.png" alt="logo kan niet geladen worden" class="nav-text logo-size">
        </a>
        <nav>
            <a href="menu.php" class="nav-links">Menu</a>
            <a href="login.php" class="nav-links">Login</a>
        </nav>

    </header>
    <main class="contact-form-height">
        <form action="contact.php" method="post" class="main-wrapper">
            <h2>neem contact op</h2>
            <input type="reden voor contact" class="kleine-box" placeholder="reden voor contact">
            <input type="naam" class="kleine-box" placeholder="naam">
            <input type="email" class="kleine-box" placeholder="email">
            <input type="telefoonnum" class="kleine-box" placeholder="telefoon nummer">
            <input type="feedback" class="grote-box" placeholder="uw bericht">
            <input type="submit" class="submit-knop">
        </form>
    </main>
</body>

</html>