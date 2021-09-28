<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Bookmaker extends SoccerAPIClient
{
    public function all()
    {
        return $this->callData('bookmakers');
    }
}