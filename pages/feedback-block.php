<?php include_once("PDO.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/styling/style.css">
</head>
<?php
    if(isset($_POST['contactID'])){
        $contactID = $_POST['contactID'];

        $sql ="DELETE FROM contact WHERE contactID  = :contactID";
        $stmt= $conn->prepare($sql);
        $stmt->execute(['contactID' => intval($contactID)]);
        $stmt->debugDumpParams();
    }
    

 ?>
<body>
<?php $data = $conn->query("SELECT * FROM contact")->fetchAll(); ?>
    <?php foreach ($data as $row) { ?>
        <main class="contact-from-bekijken">
        <p>
            <?php echo $row['reden_contact']; ?>
        </p>
        <p>
            <?php echo $row['feedback_naam']; ?>
        </p>
        <p>
            <?php echo $row['feedback_email']; ?>
        </p>
        <p>
            <?php echo $row['feedback_bericht']; ?>
        </p>
            <form class="formpie-height" action="<?php $_PHP_SELF?>" method="post">
            <input type="hidden" name="contactID" id="" value="<?php echo $row['contactID']; ?>">
            <input type="submit" name="delete" id="delete" value="delete">
            </form>
        </main>

    <?php } ?>
</body>
</html>