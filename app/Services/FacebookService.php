<?php

namespace App\Services;

//Business Logic
use App\Clients\Contracts\HttpClientInterface;

class FacebookService
{
    private $httpClient;
    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }












}
