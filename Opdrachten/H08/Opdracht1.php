<?php

class Programma{
    private $naam = "";
    private $descr = "";
    private $liedjes = array("Darude sandstorm", "Harlem shake", "gangnam style");

    /*
     * Geeft info over het programma
     * @return array
     */
    public function getProgramma(){
        return array("naam" => $this->naam, "omschrijving" => $this->descr);
    }

    /*
     * geef eee naam aan het programma
     * @param de naam als string
     */
    public function setNaam($n){
        if (strlen($n)>=2){
            $this->naam = $n;
        }
    }

    /*
     * Geef een naam aan het programma
     * @param de omschrijving
     */
    public function setOmschrijving($omschrijving){
        $this->descr = $omschrijving;
    }

    /*
     * Geeft de naam van het programma
     *@return naam
     */
    public function getNaam(){
        return $this->naam;
    }

    /*
     * Geeft de omschrijving van het programma
     *@return omschrijving
     */
    public function getOmschrijving(){
        return $this->descr;
    }

    /*
     *liedjes in het programma zetten
     *
     */
    public function getliedjes(){
        return $this->liedjes;
    }
}