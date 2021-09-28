<?php

namespace Tests;

use Illuminate\Support\Facades\Config;
use Uchup07\LaravelSoccerapi\LaravelSoccerapiServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Spatie\Snapshots\MatchesSnapshots;

class TestCase extends OrchestraTestCase
{
    use \Spatie\Snapshots\MatchesSnapshots;
    protected $matchId, $tvStationMatchId, $leagueId, $continentId, $countryId, $fixtureId, $teamId, $firstTeamId, $secondTeamId,
        $seasonId, $playerId, $bookmakerId, $venueId, $roundId, $team1Id, $team2Id;

    public function setUp(): void
    {
        parent::setUp();

        Config::set('laravel-soccerapi.api_token', 'w3PF75BNtBBBH4WjrhSZqT1KNHmboPifbiZyxVCHGYVO6DKunTu12kkOWbpL');

        // Usable with an English Premier League plan
        $this->matchId = 1135338;
        $this->tvStationMatchId = 7611;
        $this->leagueId = 8;
        $this->continentId = 1;
        $this->venueId = 206;
        $this->roundId = 219;
        $this->countryId = 462;
        $this->teamId = 19;
        $this->team1Id = 6;
        $this->team2Id = 27;
        $this->firstTeamId = 6;
        $this->secondTeamId = 19;
        $this->seasonId = 718;
        $this->playerId = 579;
        $this->bookmakerId = 1;
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelSoccerapiServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        # code...
    }
}
