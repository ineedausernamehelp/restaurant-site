<?php
include_once('pages/pdo.php');
//gebruikersnaam admin
//password admin123
if (isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true) {
    header("Location: admin.php");
}
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,300;1,400&display=swap" rel="stylesheet">
</head>

<?php
$data = $conn->query("SELECT * FROM users")->fetchAll();

foreach ($data as $row) {



    if (isset($_POST['gebruikersnaam']) && isset($_POST['password'])) {
        if ($_POST['gebruikersnaam'] == $row['username'] && $_POST['password'] == $row['password']) {
            $_SESSION['user_logged_in'] = true;
            $_SESSION['gebruikersnaam'] = $row['username'];
            //$_SESSION['password'] == $_POST['password'];

            header("Location: admin.php")
?>
<?php }
    }
} ?>


<body>
    <?php include_once('pages/header.php');
    ?>
    <main class="contact-form-height">
        <form action="login.php" method="post" class="main-wrapper">
            <h2>Login</h2>
            <input type="input" class="kleine-box" name="gebruikersnaam" placeholder="Gebruikersnaam" id="username">
            <input type="password" class="kleine-box" name="password" placeholder="Wachtwoord" id="password">

            <input type="submit" class="submit-knop" value="login" onclick="return confirm('Are you sure you want to log in');">
        </form>
    </main>


</body>

</html>