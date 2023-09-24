<?php

namespace App\Clients;

use App\Clients\Contracts\HttpClientInterface;
use GuzzleHttp\Client;

class GuzzleHttpClient implements HttpClientInterface
{
    private static $client;
    private $headers;

    public static function getClient(): Client
    {
        if (!isset(self::$client))
            self::$client = new Client();
        return self::$client;
    }


    public function getRequest($url, $data)
    {
        $response = self::getClient()->request('GET', $url,
            [
                'headers' => $this->headers,
                'query' => $data
            ]);

        return $response->getBody()->getContents();
    }

    public function postRequest($url, $data)
    {
        $response = self::getClient()->request('POST', $url,
            [
                'headers' => $this->headers,
                'body' => $data
            ]);
        return $response->getBody()->getContents();
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
    }
}
