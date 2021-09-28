<?php

namespace Uchup07\LaravelSoccerapi;

use Uchup07\LaravelSoccerapi\Requests\Country;
use Uchup07\LaravelSoccerapi\Requests\Fixture;
use Uchup07\LaravelSoccerapi\Requests\League;

class LaravelSoccerapi
{
    // Build your next great package.
    public static function fixtures()
    {
        return new Fixture();
    }

    public function leagues()
    {
        return new League();
    }

    public function countries()
    {
        return new Country();
    }
}
