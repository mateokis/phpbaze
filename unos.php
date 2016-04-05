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
<form action="insert.php" method="post">
    Registracija:<br>
    <input type="text" name="Registracija"><br>
    Ime:<br>
    <input type="text" name="ime">
    <input type="submit" value="Unesi automobil">
</form>
</p>
</body>
</html>