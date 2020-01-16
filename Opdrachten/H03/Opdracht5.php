<?php
$leeftijd = 9;
$bedrag = 10;

//Mensen boven de 65 en 12 en onder 50% korting geven
if ($leeftijd > 65 || $leeftijd <= 12){
    $bedrag = $bedrag * 0.5;
}
//mensen onder de 3 kunnen gratis
if ($leeftijd < 3){
    $bedrag = 0;
}

echo $bedrag;
?>
<!DOCTYPE html>
<html>
<head>
    <title>title</title>k
</head>
<body>
</body>
</html>