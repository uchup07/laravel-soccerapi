<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Stage extends SoccerAPIClient
{
    public function byId($stageId)
    {
        return $this->call('stages/' . $stageId);
    }

    public function bySeasonId($seasonId)
    {
        return $this->call('stages/season/' . $seasonId);
    }
}