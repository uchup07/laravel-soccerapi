<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Odds extends SoccerAPIClient
{
    public function byMatchId($matchId)
    {
        return $this->callData('odds/fixture/' . $matchId);
    }

    public function byMatchAndBookmakerId($matchId, $bookmakerId)
    {
        return $this->callData('odds/fixture/' . $matchId . '/bookmaker/' . $bookmakerId);
    }

    public function inplayByMatchId($matchId)
    {

        return $this->callData('odds/inplay/fixture/' . $matchId );
    }
}