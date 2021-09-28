<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Player extends SoccerAPIClient
{
    public function byId($playerId)
    {
        return $this->callData('players/' . $playerId);
    }
}