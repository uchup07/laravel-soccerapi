<?php

namespace Uchup07\LaravelSoccerapi\Tests;

use Illuminate\Support\Facades\Config;
use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class SetupTest extends TestCase {
    public function it_throws_an_exception_if_no_api_token_set()
    {
        Config::set('soccerapi.api_token', '');

        $soccerAPI = new SoccerAPIClient();
    }
}