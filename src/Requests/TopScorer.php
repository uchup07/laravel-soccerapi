<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class TopScorer extends SoccerAPIClient
{
    public function bySeasonId($seasonId)
    {
        return $this->callData('topscorers/season/' . $seasonId);
    }

    public function aggregatedBySeasonId($seasonId)
    {
        return $this->callData('topscorers/season/' . $seasonId . '/aggregated');
    }
}