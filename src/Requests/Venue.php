<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Venue extends SoccerAPIClient
{
    public function byId($venueId)
    {
        return $this->call('venues/' . $venueId);
    }
    
    public function bySeasonId($seasonId)
    {
        return $this->call('venues/season/' . $seasonId);
    }
}