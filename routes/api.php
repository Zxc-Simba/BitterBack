<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TweetController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/showMessage", [TweetController::class, "show"]);

Route::get("/showAllUsers", [TweetController::class, "showAllUsers"]);

Route::get("/userShow/{id}", [TweetController::class, "userShow"]);

Route::post("/addTweet", [TweetController::class, "addTweet"]);

Route::post("/follow/{id}",[TweetController::class, "follow"]);

Route::delete("/unFollow/{id}",[TweetController::class, "unFollow"]);

Route::post('/hashtags',[TweetController::class, "getHashtags"]);


