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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,700;1,300;1,400&display=swap"
        rel="stylesheet">
</head>
<?php
if(isset($_POST["submit"])){
    $reden_contact = (isset($_POST['reden_voor_contact']) ? $_POST['reden_voor_contact'] : '');
    $feedback_naam = (isset($_POST['naam']) ? $_POST['naam'] : '');
    $feedback_email = (isset($_POST['email']) ? $_POST['email'] : '');
    $feedback_bericht = (isset($_POST['feedback']) ? $_POST['feedback'] : '');
    
    
    $sql = "INSERT INTO contact (reden_contact , feedback_naam , feedback_email ,feedback_bericht) VALUES (?,?,?,?)";
    $conn->prepare($sql)->execute([
        $reden_contact, $feedback_naam, $feedback_email, $feedback_bericht
    ]);


}



?>


<body>
    <?php include_once('pages/header.php'); 

    ?>

    <main class="contact-form-height">
        <form action="contact.php" method="post" class="main-wrapper">
            <h2>neem contact op</h2>
            <input type="input" name="reden_voor_contact" class="kleine-box" placeholder="reden voor contact">
            <input type="input" name="naam" class="kleine-box" placeholder="naam">
            <input type="input" name="email" class="kleine-box" placeholder="email">
            <input type="input" name="feedback" class="grote-box" placeholder="uw bericht">
            <input type="submit" class="submit-knop" name="submit">
        </form>
    </main>

</body>


</html>