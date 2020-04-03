<?php

class Autooverzicht
{
    private $autoos;

    function __construct()
    {
        $this->autoos = [
            new Cars('Audi', 102500.00, 'img/Audi.jpg'), new Cars('Audi', 108250.00, 'img/Audi.jpg'),
            new Cars('Ferrari', 99500.00, 'img/Ferrari.jpg'), new Cars('Ferrari', 12500.00, 'img/Ferrari.jpg'),
            new Cars('Ferrari', 152500.00, 'img/Ferrari.jpg'), new Cars('Fiat', 40500.00, 'img/Fiat.jpg'),
            new Cars('Fiat', 11500.00, 'img/Fiat.jpg'), new Cars('Mercedes', 82500.00, 'img/Mercedes.jpg'),
            new Cars('Mercedes', 132700.00, 'img/Mercedes.jpg'), new Cars('Mercedes', 87500.00, 'img/Mercedes.jpg'),
            new Cars('Mercedes', 222650.00, 'img/Mercedes.jpg'), new Cars('Opel',13500.00, 'img/Opel.jpg'),
            new Cars('Opel',9500.00, 'img/Opel.jpg'), new Cars('Opel',19500.00, 'img/Opel.jpg'),
            new Cars('Volkswagen',16340.00, 'img/Volkswagen.jpg'), new Cars('Volkswagen',18340.00, 'img/Volkswagen.jpg'),
            new Cars('Volkswagen', 21670.00, 'img/Volkswagen.jpg')
        ];
    }


    function getAutoLijst(){
        return $this->autoos;
    }

    function voegAutoToe($merk, $prijs, $image_url){
        $newAuto = new Cars($merk, $prijs, $image_url);
        $this->autoos[] = $newAuto;
    }

    function getGefilterdeLijst($minprijs, $maxprijs, $merk){
        $filterLijst = [];
        foreach ($this->autoos as $auto){
            if ($auto->getPrijs() > $minprijs && $auto->getPrijs() < $maxprijs && $auto->getMerk() == $merk){
                $filterLijst[] = $auto;
            }
        }
        return $filterLijst;
    }
}