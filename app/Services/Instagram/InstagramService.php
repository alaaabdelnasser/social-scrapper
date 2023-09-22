<?php

namespace App\Services\Instagram;

//Business Logic

use App\Clients\Contracts\HttpClientInterface;

class InstagramService
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function GetUserProfileInfo($username)
    {
        $this->httpClient->getRequest(InstagramConstants::PROFILE_END_POINT . $username, []);
    }


}
