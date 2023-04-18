<?php include_once('pages/pdo.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling/style.css">
</head>
<?php
if (isset($_POST["submit"])) {
    $naam = (isset($_POST['naam']) ? $_POST['naam'] : '');
    $prijs = (isset($_POST['prijs']) ? $_POST['prijs'] : '');
    $beschrijving = (isset($_POST['beschrijving']) ? $_POST['beschrijving'] : '');
    $reviews = (isset($_POST['reviews']) ? $_POST['reviews'] : '');
    $image = (isset($_POST['image']) ? $_POST['image'] : '');


    $sql = "INSERT INTO menu (naam, prijs, beschrijving ,reviews, image) VALUES(?,?,?,?,?)";
    $conn->prepare($sql)->execute([
        $naam,
        $prijs,
        $beschrijving,
        $reviews,
        $image,
    ]);
}
?>


<body>
    <?php include_once('pages/header.php') ?>
    <form action="gerecht-toevoegen.php" method="post" class="main-wrapper footer-margin">
        <input type="hidden" class="kleine-box" name="gerechtID" placeholder="GerechtID Verandert niet">
        <input type="input" name="naam" id="" class="kleine-box" placeholder="naam">
        <input type="input" name="prijs" id="" class="kleine-box" placeholder="prijs">
        <input type="input" name="beschrijving" id="" class="kleine-box" placeholder="beschrijving">
        <input type="input" name="reviews" id="" class="kleine-box" placeholder="reviews">
        <input type="url" name="image" id="" class="kleine-box" placeholder="image">
        <input type="submit" class="submit-knop" name="submit" value="gerechten toevoegen" id="submit" onclick="return confirm('Are you sure you want to add this item?');">



    </form>




</body>

</html>