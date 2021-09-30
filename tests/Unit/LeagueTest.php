<?php

namespace Tests\Unit;

use Tests\TestCase;
use Uchup07\LaravelSoccerapi\LaravelSoccerapi;

class LeaqueTest extends TestCase
{
    public function test_it_can_league_id()
    {
        $league = LaravelSoccerapi::leagues()->byId($this->leagueId);
        $this->assertMatchesObjectSnapshot($league);
    }

    public function test_it_can_get_all()
    {
        $league = LaravelSoccerapi::leagues()->all();
        $this->assertMatchesObjectSnapshot($league);
    }
}