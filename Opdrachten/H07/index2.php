<?php
session_start();

if (isset($_SESSION['gebruiker']) && $_SESSION['gebruiker']['rol'] == "administrator"){
    echo "<h1>Welkom ". $_SESSION['gebruiker']['naam']. " op de website</h1>";
    echo "<p>Alleen administrators kunnen dit zien!</p>";
}
elseif ((isset($_SESSION['gebruiker']) && $_SESSION['gebruiker']['rol'] == "gebruiker")){
    echo "je hebt onvoldoende rechten om deze pagina te bezoekken".'<br>';
}
else{
    header('location: website.php');
}
echo "<a href='website.php?logout'>Uitloggen</a>";
?>