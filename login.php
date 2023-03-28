<?php
include_once('pages/pdo.php');
//gebruikersnaam admin
//password admin123
?>
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
    <?php include_once('pages/header.php');
    $data = $conn->query("SELECT * FROM users")->fetchAll();
    ?>
    <main class="contact-form-height">
        <form action="login.php" method="post" class="main-wrapper">
            <h2>Login</h2>
            <input type="input" class="kleine-box" name="gebruikersnaam" placeholder="Gebruikersnaam">
            <input type="password" class="kleine-box" name="password" placeholder="Wachtwoord">

            <input type="submit" class="submit-knop" value="login">
            <?php foreach ($data as $row) { ?>
                <?php if ($_POST['gebruikersnaam'] == $row['username'] && $_POST['password'] == $row['password']) { ?>
                    <div>
                        <p>gelukt wat wil je doen</p>

                    </div>
                    <a href="menu-aanpassen.php">gerecht veranderen</a>
                    <a href="gerecht-toevoegen.php">gerecht toevoegen</a>
                    <a href="feedback-bekijken.php">feedback bekijken</a>
                <?php } ?>
            </form>

        <?php } ?>
    </main>


</body>

</html>