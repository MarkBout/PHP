<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bakkerij Wim Vlecht</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<header>
    <h1>Bakkerij Wim Vlecht</h1>
</header>
<nav>
    <ul>
        <li><a href="index.php">Overzicht Broodjes</a></li>
        <li><a href="page2.php">Broodjes toevoegen</a></li>
    </ul>
</nav>
<div class="container">
    <form action='page2.php' method='post'>
        <label for="meelveld"><b>Soort meel</b></label><br>
        <input type="text" name="meel" id="meelveld" required><br>
        <label for="vormveld"><b>Vorm broodje</b></label><br>
        <input type="text" name="vorm" id="vormveld" required><br>
        <label for="gewichtveld"><b>Gewicht (eenheid erbij)</b></label><br>
        <input type="text" name="gewicht" id="gewichtveld" required><br><br>
        <input id="knop" type="submit" name="add" value="Voeg brood toe">
    </form>
</div>
<?php
require ("Broodjes.php");
$input = new Broodjes();
if (isset($_POST['add'])) {
    $meel = $_POST['meel'];
    $vorm = $_POST['vorm'];
    $gewicht = $_POST['gewicht'];
    $input->addBroodjes($meel,$vorm,$gewicht);
}

?>
</body>
</html>