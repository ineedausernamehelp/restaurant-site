<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,300;1,400&display=swap"
        rel="stylesheet">
</head>

<body>
    <?php include_once('pages/header.php'); ?>
    <main class="contact-form-height">
        <form action="contact.php" method="post" class="main-wrapper">
            <h2>Login</h2>
            <input type="gebruikersnaam" class="kleine-box" placeholder="Gebruikersnaam">
            <input type="password" class="kleine-box" placeholder="Wachtwoord">
            <input type="submit" class="submit-knop">
        </form>
    </main>


</body>

</html>