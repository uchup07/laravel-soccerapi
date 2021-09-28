<?php

namespace Uchup07\LaravelSoccerapi\Requests;

use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class Markets extends SoccerAPIClient
{
    public function all()
    {
        return $this->callData('markets');
    }

    public function byId($marketsId)
    {
        return $this->call('markets/' . $marketsId);
    }
}