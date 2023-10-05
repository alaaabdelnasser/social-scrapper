<?php

namespace App\Services\Twitter;

//Business Logic
use App\Clients\Contracts\HttpClientInterface;


class TwitterService
{

    private $httpClient;


    private function getHttpHeader(): array
    {
        return [
            'Content-Type' => 'application/json'
        ];
    }

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }


    public function getBearerToken()
    {
         $response = $this->httpClient->getRequest(TwitterConstants::BEARER_TOKEN_URL, []);

        $pattern = '/s="([^"]+)";/';  // Assumes the token is enclosed in double quotes

        $token = preg_match($pattern, $response , $matches);
        dd($matches);
        return $token;

    }

    public function getAuthTokens()
    {
        //Bearer Token
        $bearerToken = $this->getBearerToken();
        $this->httpClient->setHeaders(array_merge($this->getHttpHeader(), ['Authorization' => ('Bearer ' . $bearerToken)]));
        //Guest Token
        $response = $this->httpClient->postRequest(TwitterConstants::GUEST_TOKEN_URL, null);

        return ['guest_token' => json_decode($response, true)['guest_token'], 'bearer_token' => $bearerToken];


    }

    public function getUserProfile($username)
    {
        $tokens = $this->getAuthTokens();
        $this->httpClient->setHeaders(array_merge($this->getHttpHeader(),
            [
                'Authorization' => ('Bearer ' . $tokens['bearer_token']),
                'X-Guest-Token' => ($tokens['guest_token'])
            ]
        ));

        $data_array = [
            'variables' => sprintf('{"screen_name":"%s","withSafetyModeUserFields":true}', $username),
            'features' => '{"hidden_profile_likes_enabled":false,"hidden_profile_subscriptions_enabled":false,"responsive_web_graphql_exclude_directive_enabled":false,"verified_phone_label_enabled":false,"subscriptions_verification_info_is_identity_verified_enabled":false,"subscriptions_verification_info_verified_since_enabled":false,"highlights_tweets_tab_ui_enabled":false,"creator_subscriptions_tweet_preview_api_enabled":false,"responsive_web_graphql_skip_user_profile_image_extensions_enabled":false,"responsive_web_graphql_timeline_navigation_enabled":false}',
        ];

        return json_decode($this->httpClient->getRequest(TwitterConstants::PROFILE_DATA_URL, $data_array), true);


    }


}
