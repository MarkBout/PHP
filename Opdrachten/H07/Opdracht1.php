<?php
session_start();
//connectie maken met DB en kijken of deze gelukt is
$conn = mysqli_connect("localhost", "root", "", "phpcursus", "3306");
//$conn = mysqli_connect("localhost", "52824@localhost", "krijgkanker", "52824");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
//sql querry aangeven en naar de DB sturen
$querry = "SELECT * FROM inloggegevens";
$result = $conn->query($querry);

while($data = $result->fetch_assoc()){
    if ($_POST['gebruikersnaam'] == $data['inlognaam'] && $_POST['wachtwoord'] == $data['wachtwoord']){
        $_SESSION['gebruiker'] = array("naam" => $data['inlognaam'], "wachtwoord" => $data['wachtwoord'], "rol" => $data['rol']);
        header("location: index2.php");
        break;
    }else{
        header("location: website.php?deny");
    }
}
?>