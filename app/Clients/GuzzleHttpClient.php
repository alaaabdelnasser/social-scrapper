<?php

namespace App\Clients;

use App\Clients\Contracts\HttpClientInterface;
use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClientInterface
{

    private $client;




    public function getRequest($url, $data)
    {
        dd("I'M GuzzleHttpClient");

        $this->client->get($url, $data);
    }

    public function postRequest($url, $data)
    {
        $this->client->post($url, $data);
    }
}
