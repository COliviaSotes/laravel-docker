<?php


namespace App\Infraestructure\ApiSource;


use App\Infraestructure\ApiSourceInterface\ApiSourcexInterface;

class FakeApiSource implements ApiSourceInterface
{

    public function apiGetPrice($idCoin)
    {
        return(50000);
    }

    public function curl($url)
    {
        // TODO: Implement curl() method.
    }
}
