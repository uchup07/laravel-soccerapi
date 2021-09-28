<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Team extends SoccerAPIClient
{
    public function allBySeasonId($seasonId)
    {
        return $this->callData('teams/season/' . $seasonId);
    }

    public function byId($teamId)
    {
        return $this->call('teams/' . $teamId);
    }
}