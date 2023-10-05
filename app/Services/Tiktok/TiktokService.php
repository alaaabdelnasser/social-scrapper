<?php

namespace App\Services\Tiktok;

//Business Logic


use App\Clients\Contracts\HttpClientInterface;
use App\Services\Tiktok\TiktokConstants;

use Illuminate\Support\Facades\Storage;
use PHPHtmlParser\Dom;


class TiktokService
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

    public function GetUserProfileInfo($username)
    {

        $this->httpClient->setHeaders($this->getHttpHeader());
        $html = $this->httpClient->getRequest(TiktokConstants::PROFILE_END_POINT . $username, []);
        $this->parsing($html);

    }


    public function parsing($html)
    {
        /** @var \PHPHtmlParser\Dom\HtmlNode $contents This is a counter. */
        /** @var \PHPHtmlParser\Dom\HtmlNode $child This is a counter. */

        $dom = new Dom;
        $dom->loadStr($html);
        $userInfo = [];
        $contents = $dom->find('.//*[@id="main-content-others_homepage"]/div/div[1]/h3')[0];
        foreach ($contents->getChildren() as $child) {
            $userInfo[$child->lastChild()->text()] = $child->firstChild()->text();

        }
        dd($userInfo);

    }


}
