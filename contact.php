<?php
if (isset($_POST["username"]) && isset($_POST["password"])) {
    if ($_POST["username"] == "bozo" && $_POST["password"] == "123") {
        echo "succes";
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header></header>
    <main>
        <form action="contact.php" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" value="verstuur">
        </form>
    </main>
    <footer></footer>
</body>

</html>