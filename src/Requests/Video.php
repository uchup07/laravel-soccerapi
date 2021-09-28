<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Video extends SoccerAPIClient
{
    public function all()
    {
        return $this->callData('highlights/');
    }

    public function byMatchId($matchId)
    {
        return $this->callData('highlights/fixture/' . $matchId);
    }
}