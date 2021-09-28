<?php

namespace Tests\Unit;

use Tests\TestCase;
use Uchup07\LaravelSoccerapi\LaravelSoccerapi;

class FixtureTest extends TestCase
{
    public function test_it_can_get_by_match_id()
    {
        $fixture = LaravelSoccerapi::fixtures()->byMatchId($this->matchId);
        $this->assertMatchesObjectSnapshot($fixture);
    }

    public function test_it_can_get_by_date()
    {
        $fixture = LaravelSoccerapi::fixtures()->byDate('2021-09-29');
        $this->assertMatchesObjectSnapshot($fixture);
    }
}