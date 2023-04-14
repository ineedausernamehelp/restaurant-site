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
<?php

//delete gerecht
if (isset($_POST['id'])) {
    $ID = $_POST['id'];

    $sql = "DELETE FROM menu WHERE id  = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['id' => intval($ID)]);
}



$data = $conn->query("SELECT * from menu")->fetchAll();
?>

<body>
    <?php include_once('pages/header.php') ?>
    <main class="contact-form-height menu-aanpassen">


        <?php foreach ($data as $row) { ?>
            <form action="gerecht-verwijderen.php" method="post" class="main-wrapper footer-margin">
                <h2>Gerecht verwijderen</h2>
                <input value="<?php echo $row['id']; ?>" type="hidden" class="kleine-box" name="gerechtID"
                    placeholder="GerechtID Verandert niet">
                <input value="<?php echo $row['naam']; ?>" type="input" name="naam" id="" class="kleine-box"
                    placeholder="naam">
                <input value="<?php echo $row['prijs']; ?>" type="input" name="prijs" id="" class="kleine-box"
                    placeholder="prijs">
                <input value="<?php echo $row['beschrijving']; ?>" type="input" name="beschrijving" id="" class="kleine-box"
                    placeholder="beschrijving">
                <input value="<?php echo $row['reviews']; ?>" type="input" name="reviews" id="" class="kleine-box"
                    placeholder="reviews">
                <input value="<?php echo $row['image']; ?>" type="url" name="image" id="" class="kleine-box"
                    placeholder="image">
                <input type="hidden" name="id" id="" value="<?php echo $row['id']; ?>">
                <input type="submit" name="delete" id="delete" value="delete" onclick="deletePopup()">
                <script>
                    function deletePopup() {
                        document.getElementById("delete").style.display = "block";

                    }
                </script>

            </form>
        <?php } ?>


    </main>
    <footer></footer>
</body>

</html>