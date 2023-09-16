<?php

namespace App\Clients;

class SocialScrapperClient
{
    protected $httpClient;
    protected $baseUrl = '';

    /**
     * Set the baseUrl
     *
     * @param string $baseUrl
     * @return $this
     */

    public function setBaseUrl($baseUrl)
    {
        $this->baseUrl = $baseUrl;

        return $this;
    }

    /**
     * Get the baseUrl .
     *
     * @return string
     */
    public function getBaseUrl(): string
    {
        return $this->baseUrl;
    }


    public function GetRequest($parameters)
    {


    }


    public function PostRequest($parameters)
    {

    }


}
