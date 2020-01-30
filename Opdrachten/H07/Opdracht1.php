<?php
session_start();
//connectie maken met DB en kijken of deze gelukt is
$conn = mysqli_connect("localhost", "root", "", "phpcursus","3306");

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
    $_SESSION['gebruiker'] = array("naam" => $data['inlognaam'], "wachtwoord" => $data['wachtwoord'], "rol" => $data['rol']);
    echo "Welkom " . $_SESSION['gebruiker']['naam']." met de rol ".$_SESSION['gebruiker']['rol']."<br>";
    echo '<a href="index2.php">Naar de admin pagina</a><br>';
    echo "<a href='website.php?logout'>Uitloggen</a>";

}elseif (!$login){
    echo "Sorry geen toegang";
}
?>