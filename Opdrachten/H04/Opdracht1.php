<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Opdracht 1</title>
</head>
<body>
<ul>
    <?php
    $cel = 20;
    $string = "tieten";
    echo temperatuurConvert($cel);
    echo "<br>";
    echo stringshuffle($string);

    function temperatuurConvert($cel){
        //formule om Fahrenheit te berekenen
        $faren =($cel - 32) * 0.5556." Fahrenheit";
        return $faren;
    }
    function stringshuffle($string){
        //str_split zet de string om in array die in letters zijn verdeeld.
        $splitter = str_split($string);
        // array_reverse voor het omdraaien van de array`.
        $reverse = array_reverse($splitter);
        //implode maakt de array een string
        return implode("",$reverse);
    }
    ?>
</ul>
</body>
</html>