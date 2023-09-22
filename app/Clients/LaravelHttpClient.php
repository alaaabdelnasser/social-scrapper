<?php

namespace App\Clients;

use App\Clients\Contracts\HttpClientInterface;
use Illuminate\Support\Facades\Http;

class LaravelHttpClient implements HttpClientInterface
{

    public function getRequest($url, $data)
    {
        dd("I'M LaravelHttpClient");
        Http::get($url, $data);
    }

    public function postRequest($url, $data)
    {
        Http::post($url, $data);

    }
}
