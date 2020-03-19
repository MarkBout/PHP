<?php
//connectie maken met DB en kijken of deze gelukt is
$conn = mysqli_connect("localhost", "52824@localhost", "krijgkanker", "52824");

if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
//sql querry aangeven en naar de DB sturen
$querry = "SELECT * FROM inloggegevens";
$result = $conn->query($querry);

//kijken of de invoer van de gebruiker in de DB staat
while ($data = $result->fetch_assoc()) {
    if ($_POST['gebruikersnaam'] == $data['inlognaam'] && $_POST['wachtwoord'] == $data['wachtwoord']){
        $login = true;
        break 1;
    }else{
        $login = false;
    }
}
//Wat er gedaan wordt met de data
if ($login){
    echo "Welkom " . $data['inlognaam'];
}elseif (!$login){
    echo "Sorry geen toegang";
}
?>