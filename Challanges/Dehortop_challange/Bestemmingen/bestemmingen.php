<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Dehortop Reizen - Bestemmingen</title>
</head>
<body>
    <header>
        <nav>
            <ul class="navtekst">
                <li id="logo"><p>Dehortop reizen</p></li>
                <li><a href="#">Inloggen</a> </li>
                <li><a href="#">Registreer</a></li>
                <li><a href="#">Reizen</a></li>
                <li><a class="active" href="bestemmingen.php">Bestemmingen</a></li>
                <li><a href="../index.php">Home</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <table class="table-sortable">
            <?php
            require_once("../../lib/GebruikDB.php");
            $database = new GebruikDB();
            $connectie = $database->setConn("127.0.0.1","root","","phpcursus");
            $bestemmingen = $database->displayTable($connectie, "phpcursus","bestemmingen");
            echo $bestemmingen;
            ?>
        </table>
    </div>
    <footer>
        <h4>Copyright Dehortop 2019 &#169;</h4>
    </footer>
</body>
</html>