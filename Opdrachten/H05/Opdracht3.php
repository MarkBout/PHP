<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>H005/loginform_resultaat</title>
</head>
<body>
<?php
$email = array('piet@worldonline.nl', 'klaas@carpets.nl', 'truushendriks@wegweg.nl');
$wachtwoord = array('doetje123', 'snoepje777', 'arkiearkie201');
if((($_GET['email'] == $email[0]) && ($_GET['wachtwoord'] == $wachtwoord[0]))
    || (($_GET['email'] == $email[1]) && ($_GET['wachtwoord'] == $wachtwoord[1]))
    || (($_GET['email'] == $email[2]) && ($_GET['wachtwoord'] == $wachtwoord[2]))){
    echo "Welcome!";
} else {
    echo "Sorry, geen toegang!";
}
?>
</body>
</html>