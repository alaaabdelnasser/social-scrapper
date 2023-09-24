<?php

use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\ScrappingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group.Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('instagram')->name('instagram')
    ->group(function () {
        Route::get('/user-profile/{username}', [ScrappingController::class, 'index']);

    });
Route::prefix('influencer')->name('influencer')
    ->group(function () {
        Route::get('list', [InfluencerController::class, 'GetAllInfluencers']);
        Route::get('/{id}', [InfluencerController::class, 'GetInfluencersById']);

    });





