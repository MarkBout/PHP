<?php
for ($i = 1; $i <= 9; $i++){
    if ($i % 2 == 0){
        $class = "class='rood'";
    }else{
        $class = "class='green'";
    }
    echo "<img ". $class. "src='img/".$i.".jpg'>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Opdracht 4</title>
    <style>
        .rood{
            border: red solid 5px;
        }
        .green{
            border: green solid 5px;
        }
        body {
            text-align: center;
        }
    </style>
</head>
<body>

</body>
</html>
