<?php

function checkCombination($name, $password){
    //userdata om te bekijken
    $email = array('piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl');
    $wachtwoord = array('doetje123', 'snoepje777', 'arkiearkie201');
    $combination;
    //kijken of wat er is ingevoerd en wat in de arrays staat hetzelfde is
    if((($name == $email[0]) && ($password == $wachtwoord[0]))
        || (($name == $email[1]) && ($password == $wachtwoord[1]))
        || (($name == $email[2]) && ($password == $wachtwoord[2]))){
        echo "Welcome!";
        $combination = true;
    } else {
        echo "Sorry, geen toegang!";
        $combination = false;
    }
    return $combination;
}

echo "<br>" . checkCombination($_POST['email'], $_POST['wachtwoord']);