<?php
if ($_POST['loginnaam'] == ""){
    echo "Je moet nog een login naam invoeren";
    echo '<br><a href="FormOpdracht1.html">"Terug naar het formulier"</a>';
}else{
    echo $_POST['loginnaam'].'<br>';
}

if ($_POST['Adres'] == ""){
    echo "Je moet nog een Adres invoeren";
    echo '<br><a href="FormOpdracht1.html">"Terug naar het formulier"</a>';
}else{
    echo $_POST['Adres'].'<br>';
}

if ($_POST['loginnaam'] == ""){
    echo "Je moet nog een email invoeren";
    echo '<br><a href="FormOpdracht1.html">"Terug naar het formulier"</a>';
}else{
    echo $_POST['email'].'<br>';
}
