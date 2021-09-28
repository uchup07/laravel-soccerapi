<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Round extends SoccerAPIClient
{
    public function byId($roundId)
    {
        return $this->call('rounds/' . $roundId);
    }

    public function bySeasonId($seasonId)
    {
        return $this->call('rounds/season/' . $seasonId);
    }
}