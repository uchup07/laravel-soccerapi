<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class League extends SoccerAPIClient
{
    public function all()
    {
        return $this->callData('leagues');
    }

    public function byId($competitionId)
    {
        return $this->call('leagues/' . $competitionId);
    }
}