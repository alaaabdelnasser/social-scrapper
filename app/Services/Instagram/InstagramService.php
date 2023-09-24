<?php

namespace App\Services\Instagram;

//Business Logic

use App\Clients\Contracts\HttpClientInterface;

class InstagramService
{
    private $httpClient;

    private function getHttpHeader(): array
    {
        return [
            'User-Agent' => InstagramConstants::USERAGENT,
            'Content-Type' => 'application/json'
        ];
    }


    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function GetUserProfileInfo($username)
    {

        $this->httpClient->setHeaders($this->getHttpHeader());
        $this->httpClient->getRequest(InstagramConstants::PROFILE_END_POINT, ['username' => $username]);
    }


}
