<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Standings extends SoccerAPIClient
{
    public function bySeasonId($seasonId)
    {
        return $this->callData('standings/season/' . $seasonId);
    }
    
    public function liveBySeasonId($seasonId)
    {
        return $this->callData('standings/season/live/' . $seasonId);
    }
}