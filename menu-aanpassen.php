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
//update
if (isset($_POST["gerecht-aanpassen"])) {
    $naam = (isset($_POST['naam']) ? $_POST['naam'] : '');
    $prijs = (isset($_POST['prijs']) ? $_POST['prijs'] : '');
    $beschrijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');
    $reviews = (isset($_POST['reviews']) ? $_POST['reviews'] : '');
    $image = (isset($_POST['image']) ? $_POST['image'] : '');
    $id = (isset($_POST['gerechtID']) ? intval($_POST['gerechtID']) : 0);

    $sql = "UPDATE menu SET naam=?, prijs=?, beschrijving=?, reviews=?, image=? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$naam, $prijs, $beschrijving, $reviews, $image, $id]);
}



$data = $conn->query("SELECT * from menu")->fetchAll();
?>

    <?php include_once('pages/header.php') ?>
<body>
    <main class="contact-form-height menu-aanpassen">


        <?php foreach ($data as $row) { ?>
            <form action="menu-aanpassen.php" method="post" class="main-wrapper footer-margin">
                <h2>Gerecht aanpassen</h2>
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
                <input type="submit" class="submit-knop" name="gerecht-aanpassen" value="gerechten-aanpassen">

            </form>
        <?php } ?>


    </main>
    <footer></footer>
</body>

</html>