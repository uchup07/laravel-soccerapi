<?php

namespace Uchup07\LaravelSoccerapi;

use Uchup07\LaravelSoccerapi\Requests\Bookmaker;
use Uchup07\LaravelSoccerapi\Requests\Commentary;
use Uchup07\LaravelSoccerapi\Requests\Continent;
use Uchup07\LaravelSoccerapi\Requests\Country;
use Uchup07\LaravelSoccerapi\Requests\Fixture;
use Uchup07\LaravelSoccerapi\Requests\Head2Head;
use Uchup07\LaravelSoccerapi\Requests\League;
use Uchup07\LaravelSoccerapi\Requests\Livescore;
use Uchup07\LaravelSoccerapi\Requests\Markets;
use Uchup07\LaravelSoccerapi\Requests\Odds;
use Uchup07\LaravelSoccerapi\Requests\Player;
use Uchup07\LaravelSoccerapi\Requests\Round;
use Uchup07\LaravelSoccerapi\Requests\Season;
use Uchup07\LaravelSoccerapi\Requests\Squad;
use Uchup07\LaravelSoccerapi\Requests\Stage;
use Uchup07\LaravelSoccerapi\Requests\Standings;
use Uchup07\LaravelSoccerapi\Requests\Team;
use Uchup07\LaravelSoccerapi\Requests\TopScorer;
use Uchup07\LaravelSoccerapi\Requests\TVStation;
use Uchup07\LaravelSoccerapi\Requests\Venue;
use Uchup07\LaravelSoccerapi\Requests\Video;

class LaravelSoccerapi
{
    public static function bookmakers()
    {
        return new Bookmaker();
    }

    public static function commentaries()
    {
        return new Commentary();
    }

    public static function leagues()
    {
        return new League();
    }

    public static function head2head()
    {
        return new Head2Head();
    }

    public static function continents()
    {
        return new Continent();
    }

    public static function countries()
    {
        return new Country();
    }

    public static function fixtures()
    {
        return new Fixture();
    }

    public static function tvstations()
    {
        return new TVStation();
    }

    public static function venues()
    {
        return new Venue();
    }

    public static function rounds()
    {
        return new Round();
    }

    public static function livescores()
    {
        return new Livescore();
    }

    public static function odds()
    {
        return new Odds();
    }

    public static function players()
    {
        return new Player();
    }

    public static function seasons()
    {
        return new Season();
    }

    public static function standings()
    {
        return new Standings();
    }

    public static function teams()
    {
        return new Team();
    }

    public static function topscorers()
    {
        return new TopScorer();
    }

    public static function videos()
    {
        return new Video();
    }

    public static function squads()
    {
        return new Squad();
    }

    public static function markets()
    {
        return new Markets();
    }

    public static function stages()
    {
        return new Stage();
    }
}
