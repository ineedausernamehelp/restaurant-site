<?php
include_once('pages/pdo.php');

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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,300;1,400&display=swap" rel="stylesheet">
</head>


<body>
    <form action="menu.php" class="zoekbalk-container" method="post">
        <input type="text" class="zoekbalk" name="keyword">
        <input type="submit" value="zoeken" class="zoekknop" id="submit" name="submit">
    </form>

    <?php
    if (isset($_POST['submit'])) {  
        $keyword = $_POST['keyword'];
        $query = $conn->prepare("SELECT * FROM menu WHERE naam Like '%$keyword%' ");
        $query->execute();
        while ($row = $query->fetch()) { ?>
            <main class="main-wrapper">

                <div class=" menu-block">
                    <form action="winkelmandje.php" method="post" class="winkelmand-tekst">

                        <img src=<?php echo $row['image']; ?> alt="foto van eten" class="menu-foto">
                        <div class="menu-tekst">
                            <h2 class="gerechtnaam">
                                <?php echo $row['naam']; ?>
                            </h2>
                            <div class="prijs-reviews-menu-tekst">
                                <p>
                                    <?php echo $row['prijs']; ?>
                                </p>
                                <p>
                                    <?php echo $row['reviews']; ?>
                                </p>
                            </div>
                            <p class="beschrijving-gerecht-tekst">
                                <?php echo $row['beschrijving']; ?>
                            </p>
                    </form>
                </div>
            </main>
        <?php           }
    } else {
        $query = $conn->prepare("SELECT * FROM menu");
        $query->execute();
        while ($row = $query->fetch()) { ?>
            <main class="main-wrapper">

                <div class=" menu-block">
                    <form action="winkelmandje.php" method="post" class="winkelmand-tekst">

                        <img src=<?php echo $row['image']; ?> alt="foto van eten" class="menu-foto">
                        <div class="menu-tekst">
                            <h2 class="gerechtnaam">
                                <?php echo $row['naam']; ?>
                            </h2>
                            <div class="prijs-reviews-menu-tekst">
                                <p>
                                    <?php echo $row['prijs']; ?>
                                </p>
                                <p>
                                    <?php echo $row['reviews']; ?>
                                </p>
                            </div>
                            <p class="beschrijving-gerecht-tekst">
                                <?php echo $row['beschrijving']; ?>
                            </p>
                    </form>
                </div>
            </main>


    <?php    }
    }
    ?>

</html>