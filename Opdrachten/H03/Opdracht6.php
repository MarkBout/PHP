<!DOCTYPE html>
<html>
<head>
    <title>Opdracht 6</title>
    <style>
        img{
            width: 100px;
            height: 100px;
        }

        table, td, tr{
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<table>
    <?php
    $zwemclubs = array(
        "De spartelkuikens" => 25,
        "De waterbuffels" => 32,
        "Plonsmderin" => 11,
        "Bommetje" => 23
    );

    //zowel array keys en de waarden erin variabelen geven
    foreach ($zwemclubs as $clubs => $leden) {
        $aantal = floor($leden / 5);
        print '<tr>';
        print "<td> $clubs</td>";
        print "<td>$leden</td>";
        print '<td>';
        for ($i = 0; $i < $aantal; $i++){
            echo '<img src="img/zwemmer.jpg" alt="test">';
        }
        print '</td>';
        print '</tr>';

    }


    ?>
</table>
</body>
</html>