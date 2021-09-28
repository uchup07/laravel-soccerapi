<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Continent extends SoccerAPIClient
{
    public function all()
    {
        return $this->callData('continents/');
    }

    public function byId($continentId)
    {
        return $this->call('continents/' . $continentId);
    }
}