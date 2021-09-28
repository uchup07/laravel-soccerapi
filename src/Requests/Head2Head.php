<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Head2Head extends SoccerAPIClient
{
    public function betweenTeams($team1Id,$team2Id)
    {
        return $this->callData('head2head/' . $team1Id . '/' . $team2Id);
    }
}