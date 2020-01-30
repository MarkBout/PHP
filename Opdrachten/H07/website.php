<?php
session_start();
if (isset($_GET['logout'])) {
    $_SESSION = array();
    session_destroy();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inloggen</title>
    <style>
        #ww{
            margin-left: 25px;
        }
    </style>
</head>
<body>
<form action="Opdracht1.php" method="post">
    Gebruikersnaam <input type="text" name="gebruikersnaam" required><br>
    Wachtwoord <input id="ww" type="text" name="wachtwoord" required><br>
    <input type="submit" value="Inloggen">
</form>
</body>
</html>
