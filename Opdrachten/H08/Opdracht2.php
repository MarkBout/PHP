<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Opdracht2.css">
    <title>Monkey Selector</title>
</head>
<body>
<img class="pics" src="img/monkey-business.jpg">
<p>select your monkey!</p>
<img class="pics" src="img/monkey_swings.png"><br>
<?php
    include_once ("Monkeyselect.php");
    $apenselect = new Monkeyselect();
    //array uit apen.php pakken
    $arr = $apenselect->getApen();
    //linkjes op het scherm printen
    for ($i = 0; $i < count($arr); $i++){
        echo "<a id='font' href=\"https://www.google.nl/search?q=". $arr[$i] ."&tbm=isch\">". $arr[$i]."</a>"."<br>";
    }
?>
</body>
</html>