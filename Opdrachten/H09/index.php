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
<h2>Broodjes weergeven</h2>
    <div class="container">
        <table id="broodjes">
            <?php
            require("Broodjes.php");
            $display = new Broodjes();
            echo '<tr>';
            echo '<td> <b>Meel</b></td>';
            echo '<td> <b>Vorm</b></td>';
            echo '<td> <b>Gewicht</b></td>';
            echo '</tr>';
            $display->displayBrood();
            ?>
        </table>
    </div>
</body>
</html>