<?php
session_start();

if (isset($_SESSION['gebruiker'])){
    echo "<h1>Welkom ". $_SESSION['gebruiker']['naam']. " op de website</h1>";
//    echo $_SESSION['gebruiker']['wachtwoord'];
}
elseif ((isset($_SESSION['gebruiker']) && $_SESSION['gebruiker']['rol'] == "gebruiker")){
    echo "je hebt onvoldoende rechten om deze pagina te bezoekken".'<br>';
}
else{
    header('location: website.php');
}
echo "<a href='website.php?logout'>Uitloggen</a>";
?>