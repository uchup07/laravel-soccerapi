<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Squad extends SoccerAPIClient
{
    public function byTeamAndSeason($teamId, $seasonId)
    {
        return $this->callData("squad/season/{$seasonId}/team/{$teamId}");
    }
}