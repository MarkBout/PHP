<?php

class Autooverzicht
{
    private $autoos;

    function __construct()
    {
        $this->autoos = [
            new Cars('Audi', 102500.00, '//unsplash.it/199/100'), new Cars('Audi', 108250.00, '//unsplash.it/200/100'),
            new Cars('Ferrari', 99500.00, '//unsplash.it/200/101'), new Cars('Ferrari', 12500.00, '//unsplash.it/203/100'),
            new Cars('Ferrari', 152500.00, '//unsplash.it/201/100'), new Cars('Fiat', 40500.00, '//unsplash.it/199/98'),
            new Cars('Fiat', 11500.00, '//unsplash.it/202/100'), new Cars('Mercedes', 82500.00, '//unsplash.it/202/100'),
            new Cars('Mercedes', 132700.00, '//unsplash.it/198/100'), new Cars('Mercedes', 87500.00, '//unsplash.it/203/100'),
            new Cars('Mercedes', 222650.00, '//unsplash.it/200/98'), new Cars('Opel',13500.00, '//unsplash.it/204/100'),
            new Cars('Opel',9500.00, '//unsplash.it/200/102'), new Cars('Opel',19500.00, '//unsplash.it/204/99'),
            new Cars('Volkswagen',16340.00, '//unsplash.it/199/101'), new Cars('Volkswagen',18340.00, '//unsplash.it/200/100'),
            new Cars('Volkswagen', 21670.00, '//unsplash.it/200/102')
        ];
    }


    function getAutoLijst(){
        return $this->autoos;
    }

    function voegAutoToe($merk, $prijs, $image_url){
        $newAuto = new Cars($merk, $prijs, $image_url);
        $this->autoos[] = $newAuto;
    }

    function getGefilterdeLijst($minprijs, $maxprijs){
        $filterLijst = [];
        foreach ($this->autoos as $auto){
            if ($auto->getPrijs() > $minprijs && $auto->getPrijs() < $maxprijs){
                $filterLijst[] = $auto;
            }
        }
        return $filterLijst;
    }
}