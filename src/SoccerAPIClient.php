<?php

namespace Uchup07\LaravelSoccerapi;

use GuzzleHttp\Client;
use Uchup07\LaravelSoccerapi\Exceptions\ApiRequestException;

class SoccerAPIClient {
    protected $client;

    protected $apiToken;
    protected $withoutData;
    protected $include = [];
    protected $leagues = [];
    protected $fixtures = [];
    protected $bookmakers = [];
    protected $markets = [];
    protected $perPage = 50;
    protected $page = 1;
    protected $timezone;
    
    public function __construct()
    {
        $options = [
            'base_uri'  => 'https://soccer.sportmonks.com/api/v2.0/',
            'verify'    => app('env') === 'testing' ? false : true,
        ];
        $this->client = new Client($options);

        $this->apiToken = config('laravel-soccerapi.api_token');
        if(empty($this->apiToken))
        {
            throw new \InvalidArgumentException('No API token set');
        }
        $this->timezone = empty(config('laravel-soccerapi.timezone')) ? config('app.timezone') : config('laravel-soccerapi.timezone');

        $this->withoutData = empty(config('laravel-soccerapi.without_data')) ? false : config('laravel-soccerapi.without_data');
    }

    protected function call($url, $hasData = false)
    {
        $query = [
            'api_token' => $this->apiToken,
            'per_page' => $this->perPage,
            'page' => $this->page
        ];
        if(!empty($this->include))
        {
            $query['include'] = $this->include;
        }
        if ($this->timezone)
        {
            $query['tz'] = $this->timezone;
        }
        if(!empty($this->leagues))
        {
            $query['leagues'] = $this->leagues;
        }
        if (!empty($this->fixtures)) {
            $query['fixtures'] = $this->fixtures;
        }
        if (!empty($this->bookmakers)) {
            $query['bookmakers'] = $this->bookmakers;
        }
        if (!empty($this->markets)) {
            $query['markets'] = $this->markets;
        }

        $response = $this->client->get($url, ['query' => $query]);

        $body = json_decode($response->getBody()->getContents());

        if(property_exists($body, 'error'))
        {
            if(is_object($body->error))
            {
                throw new ApiRequestException($body->error->message, $body->error->code);
            }
            else
            {
                throw new ApiRequestException($body->error, 500);
            }

            return $response;
        }

        if($hasData && $this->withoutData)
        {
            return $body->data;
        }

        return $body;
    }

    protected function callData($url)
    {
        return $this->call($url, true);
    }

    /**
     * @param $include - string or array of relations to include with the query
     */
    public function setInclude($include)
    {
        if(is_array($include) && !empty($include))
        {
            $include = implode(',', $include);
        }

        $this->include = $include;

        return $this;
    }

    /**
     * @param $leagues - string or array of leagues to return only specific leagues with the query
     */
    public function setLeagues($leagues)
    {
        if(is_array($leagues) && !empty($leagues))
        {
            $leagues = implode(',', $leagues);
        }

        $this->leagues = $leagues;

        return $this;
    }
    
    /**
     * @param $fixtures - string or array of fixtures to return only specific fixtures with the query
     */
    public function setFixtures($fixtures)
    {
        if (is_array($fixtures) && !empty($fixtures)) {
            $fixtures = implode(',', $fixtures);
        }

        $this->fixtures = $fixtures;

        return $this;
    }

    /**
     * @param $bookmakers - string or array of bookmakers to return only specific bookmakers with the query
     */
    public function setBookmakers($bookmakers)
    {
        if (is_array($bookmakers) && !empty($fixtures)) {
            $bookmakers = implode(',', $bookmakers);
        }

        $this->bookmakers = $bookmakers;

        return $this;
    }

    /**
     * @param $markets - string or array of markets to return only specific markets with the query
     */
    public function setMarkets($markets)
    {
        if (is_array($markets) && !empty($markets)) {
            $markets = implode(',', $markets);
        }

        $this->markets = $markets;

        return $this;
    }    

    /**
     * @param $perPage - int of per_page limit data in request
     */
    public function setPerPage($perPage)
    {
        $this->perPage = $perPage;

        return $this;
    }

    /**
     * @param $page - int of requested page
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }
}
