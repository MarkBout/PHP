<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$kappersagenda = array(
    '9.15' => "Mevrouw Pietersen",
    '9.30' => "Mevrouw Willems",
    '9.45' => "",
    '10.00' => "Paul van den Broek",
    '10.15' => "Karel de Meeuw",
    '10.30' => ""
);

print("De volgende momenten zijn nog beschikbaar:<ul>");
foreach ($kappersagenda as $tijden => $klanten) {
    if ($klanten == ""){
        print("<li>".$tijden."</li>");
    }
}
print("</ul>");

?>
</body>
</html>