<?php

namespace App\Http\Controllers;

use App\Clients\GuzzleHttpClient;
use App\Services\Instagram\InstagramService;
use App\Services\Snapchat\SnapchatService;
use App\Services\Tiktok\TiktokService;
use App\Services\Twitter\TwitterService;
use App\Services\Youtube\YoutubeService;
use Illuminate\Http\Request;

class ScrappingController extends Controller
{
    /** @var InstagramService $instagramService */
    public $instagramService;

    /** @var TwitterService $twitterService */
    public $twitterService;

    /** @var TwitterService $tiktokService */
    public $tiktokService;

    /** @var SnapchatService $SnapchatService */
    public $snapchatService;

    /** @var YoutubeService $YoutubeService */
    public $youtubeService;
    public function __construct(GuzzleHttpClient $httpClient)
    {
        $this->instagramService = new InstagramService($httpClient);
        $this->twitterService = new TwitterService($httpClient);
        $this->tiktokService = new TiktokService($httpClient);
        $this->snapchatService = new SnapchatService($httpClient);
        $this->youtubeService = new YoutubeService($httpClient);
    }

    public function getInstagramProfile(Request $request, $username)
    {

      $this->instagramService->GetUserProfileInfo($username);


    }

    public function getTwitterProfile(Request $request, $username)
    {
        return response()->json($this->twitterService->getUserProfile($username));


    }

    public function getTiktokProfile(Request $request, $username)
    {

         $this->tiktokService->GetUserProfileInfo($username);
    }

    public function getSnapchatProfile(Request $request, $username)
    {
        $this->snapchatService->GetUserProfileInfo($username);
    }

    public function getYoutubeProfile(Request $request, $username)
    {
        $this->youtubeService->GetUserProfileinfo($username);
    }
}
