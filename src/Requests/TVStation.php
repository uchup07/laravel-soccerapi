<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class TVStation extends SoccerAPIClient
{
    public function byMatchId($id)
    {
        return $this->call('tvstations/fixture/' . $id);
    }
}