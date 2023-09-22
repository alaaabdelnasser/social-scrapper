<?php

namespace App\Http\Controllers;

use App\Clients\LaravelHttpClient;
use App\Services\Instagram\InstagramService;
use Illuminate\Http\Request;

class ScrappingController extends Controller
{

    /** @var InstagramService $instagramService */
    public $instagramService;


    public function __construct()
    {
        $this->instagramService = new InstagramService(new LaravelHttpClient());


    }

    public function index(Request $request, $username)
    {

        dd($this->instagramService->GetUserProfileInfo($username));

    }
}
