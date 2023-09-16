<?php

namespace App\Services;

//Business Logic

use App\Clients\SocialScrapperClient;
use Illuminate\Support\Facades\Http;
use Spatie\FlareClient\Http\Client;

class InstagramService
{
    private string $userAgent = 'Mozilla/5.0 (iPhone; CPU iPhone OS 12_3_1 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148 Instagram 105.0.0.11.118 (iPhone11,8; iOS 12_3_1; en_US; en-US; scale=2.00; 828x1792; 165586599)';
    private string $domain = 'i.instagram.com';
    const PROFILE_END_POINT = '/api/v1/users/web_profile_info/?username=';

    public function __construct(SocialScrapperClient $client)
    {

           //example one
        $client->setBaseUrl($this->domain);





    }


    public function GetUserProfileInfo($username)
    {

    }



}
