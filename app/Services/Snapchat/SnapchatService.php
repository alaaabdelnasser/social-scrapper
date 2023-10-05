<?php

namespace App\Services\Snapchat;

//Business Logic
use App\Clients\Contracts\HttpClientInterface;
use PHPHtmlParser\Dom;

class SnapchatService
{

    private $httpClient;


    private function getHttpHeader(): array
    {
        return [];
    }

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function GetUserProfileinfo($username)
    {
        $this->httpClient->setHeaders($this->getHttpHeader());
        $html = $this->httpClient->getRequest(SnapchatConstants::PROFILE_END_POINT . $username, []);
        $this->parsing($html);

    }

    public function parsing($html)
    {
        preg_match('/(\d+(?:\.\d+)?)([mk]?) Subscribers/', $html, $matches);
        $subscribersCount = $matches;
        dd($subscribersCount);
    }

}
