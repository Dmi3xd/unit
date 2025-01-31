<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class unitMain extends TestCase
{
    protected $client;
    protected $response;

    public function setUp(): void
    {
        env::load(__DIR__.'\..\.env', true);
        echo $_ENV['API_IAM_HOST'];

        die;

        $this->client = new Client(['base_uri' => $_ENV['API_URL']]);
    }

    public function get($url): void
    {
        $this->response = $this->client->request('GET', $url);
    }

    public function json() :array
    {
        return json_decode($this->response->getBody(), true);
    }

    public function getStatusCode() :int
    {
        return $this->response->getStatusCode();
    }
  

    public function jsonFirst() :array
    {
        return static::json()['result'][0];
    }

    public function contentType() :string
    {
        return $this->response->getHeaders()["Content-Type"][0];
    }

}
