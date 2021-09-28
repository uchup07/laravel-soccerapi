<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Commentary extends SoccerAPIClient
{
    public function byMatchId($matchId)
    {
        return $this->callData('commentaries/fixture/' . $matchId);
    }
}