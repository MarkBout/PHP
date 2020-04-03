<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garagebedrijf Mr.Wheely</title>
</head>
<body>
<form action="Opdracht3.php" method="get">
    <label for="minprijs">MinPrijs</label>
    <input type="text" name="minprijs" id="minprijs"><br>
    <label for="maxprijs">MaxPrijs </label>
    <input type="text" name="maxprijs" id="maxprijs"><br>
    <input type="submit" value="Zoeken">
</form>
<?php
require ('Cars.php');
require ('Autooverzicht.php');

$minprijs = isset($_GET['minprijs']) && !empty($_GET['minprijs']) ? $_GET['minprijs'] : 0;
$maxprijs = isset($_GET['maxprijs']) && !empty($_GET['maxprijs']) ? $_GET['maxprijs'] : 999999;

$autoos = new Autooverzicht();


foreach ($autoos->getGefilterdeLijst($minprijs, $maxprijs) as $auto){
    echo $auto->getMerk() . ' - ' . "\xE2\x82\xAc".$auto->getPrijs() . '<br>';
    echo '<img src="' . $auto->getImage() .'" alt="Plaatje van een auto"> <br>';
}
?>
</body>
</html>
