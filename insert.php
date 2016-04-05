<?php require('db.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Naslov</title>
</head>

<body>
<h1>
    Automobili
</h1>

<p>
    <?php
    $sql = "INSERT INTO automobili (registracija, ime) VALUES ('" . $_POST['registacija'] . "', '" . $_POST['ime'] . "')";
    $result = $conn->query($sql);

    echo('Automobil je unesen!<br>');
    echo('<a href="index.php">Povratak na prikaz automobila</a>');
    ?>
</form>
</p>
</body>
</html>