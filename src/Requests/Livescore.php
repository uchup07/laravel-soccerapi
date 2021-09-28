<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Livescore extends SoccerAPIClient
{
    public function today()
    {
        return $this->callData('livescores');
    }

    public function now()
    {
        return $this->callData('livescores/now');
    }
}