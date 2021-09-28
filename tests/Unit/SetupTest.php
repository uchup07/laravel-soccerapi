<?php

namespace Tests\Unit;

use Illuminate\Support\Facades\Config;
use Tests\TestCase;
use Uchup07\LaravelSoccerapi\SoccerAPIClient;

class SetupTest extends TestCase {
    public function test_it_throws_an_exception_if_no_api_token_set()
    {
        Config::set('laravel-soccerapi.api_token', '');

        $soccerAPI = new SoccerAPIClient();
    }
}