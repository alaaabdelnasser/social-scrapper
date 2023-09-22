<?php

namespace App\Clients\Contracts;

interface HttpClientInterface
{
    public function getRequest($url,$data);
    public function postRequest($url,$data);
}
