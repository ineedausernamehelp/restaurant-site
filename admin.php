<?php include_once('pages/pdo.php');
if(isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true){


}
else{
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling/style.css">
</head>

<body>
    <?php include_once('pages/header.php'); ?>
    <main class="main-wrapper menu-aanpassen">
        <a href="gerecht-verwijderen.php" class="font-size">gerecht verwijderen</a>
        <a href="menu-aanpassen.php" class="font-size">gerecht veranderen</a>
        <a href="gerecht-toevoegen.php" class="font-size">gerecht toevoegen</a>
        <a href="feedback-bekijken.php" class="font-size">feedback bekijken</a>
        <a href="pages/logout.php" class="font-size">Logout</a>
    
    </main>
</body>

</html>