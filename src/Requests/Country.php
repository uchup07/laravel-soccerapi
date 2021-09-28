<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Country extends SoccerAPIClient
{
    public function all()
    {
        return $this->callData('countries');
    }

    public function byId($countryId)
    {
        return $this->call('countries/' . $countryId);
    }
}