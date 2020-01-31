<?php
include_once ("Opdracht1.php");

$mijnprogramma = new Programma();
$mijnprogramma->setNaam("Radio Speler");
$mijnprogramma->setOmschrijving("Kies een liedje:"."<br>");

foreach ($mijnprogramma->getProgramma() as $p){
    echo $p."<br>";
}

foreach ($mijnprogramma->getliedjes() as $l){
    echo $l."<br>";
}