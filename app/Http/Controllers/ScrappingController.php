<?php

namespace App\Http\Controllers;

use App\Clients\GuzzleHttpClient;
use App\Exceptions\GUzzleTarkException;
use App\Services\Instagram\InstagramService;
use Illuminate\Http\Request;

class ScrappingController extends Controller
{
    /** @var InstagramService $instagramService */
    public $instagramService;

    public function __construct(GuzzleHttpClient $httpClient)
    {
        $this->instagramService = new InstagramService($httpClient);
    }

    public function index(Request $request, $username)
    {
        $this->instagramService->GetUserProfileInfo($username);

    }
}
