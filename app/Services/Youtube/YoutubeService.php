<?php

namespace App\Services\Youtube;

//Business Logic
use App\Clients\Contracts\HttpClientInterface;
use PHPHtmlParser\Dom;


class YoutubeService
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

    public function GetUserProfileinfo($username){

        $this->httpClient->setHeaders($this->getHttpHeader());
        $html = $this->httpClient->getRequest(YoutubeConstants::PROFILE_END_POINT . $username , []);
        $this->parsing($html);

    }

    public function parsing($html)
    {
        $dom = new Dom;
        $dom->loadStr($html);
        $contents = $dom->find('.//*[@id="subscriber-count"]')[0];
        echo $contents;
        dd($contents);
    }

}
