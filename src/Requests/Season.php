<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Season extends SoccerAPIClient
{
    public function all()
    {
        return $this->callData('seasons');
    }

    public function byId($seasonId)
    {
        return $this->call('seasons/' . $seasonId);
    }
}