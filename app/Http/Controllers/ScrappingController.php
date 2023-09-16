<?php

namespace App\Http\Controllers;

use App\Services\InstagramService;
use Illuminate\Http\Request;

class ScrappingController extends Controller
{

    /** @var InstagramService $instagramService */
    public $instagramService;


    public function __construct(InstagramService $instagramService)
    {
        $this->instagramService = $instagramService;
    }

    public function index(Request $request, $username)
    {

        dd( $this->instagramService->GetUserProfileInfo($username));

    }
}
