<?php

use App\Models\Hashtag;
use App\Models\TweetHashtag;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Tweet;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserFollow;
use App\Repositories\TweetRepository;
use App\Models\TweetMention;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get("/showMessage", "App\\Http\\Controllers\TweetController@show");
/*$tweetContent = '333333333333 @Travon@Beryl#SSSSSS#ZZZZZ#LLLLKASD';
$userNames = array();
$users = User::all();

User::find(1)->tweets()->create(['content' => $tweetContent]);
$tweetIds = Tweet::where('content', $tweetContent)->pluck('id');
$lastTweet = $tweetIds[count($tweetIds)-1];


preg_match_all("/@\b\w+\b/", $tweetContent, $tweetMentions);

preg_match_all("/#\b\w+\b/", $tweetContent, $tweetHashtags);



foreach ($tweetMentions[0] as $m) {
    $a = substr($m, 1);
    array_push($userNames, $a);
}

$userIds = $users->whereIn('username', $userNames)
    ->pluck('id')->toArray();

foreach ($userIds as $userId) {

    Tweet::find($lastTweet)->tweetMentions()->create(['mentionedUserId' => $userId]);

}


foreach ($tweetHashtags[0] as $h) {

    $Hashtags = Hashtag::pluck("hashtag")->toArray();
    if (!in_array($h, $Hashtags)) {
        Hashtag::create(['hashtag' => $h]);
    }

    $HashtagsSecond = Hashtag::pluck("hashtag")->toArray();
    var_dump($HashtagsSecond);
    if (in_array($h, $HashtagsSecond)) {
        $hh=Hashtag::where('hashtag', $h)->pluck("id");
        TweetHashtag::create(['tweet_id' => $lastTweet, 'hashtag_id' => $hh[0]]);
    }

}*/


/*$tweetContent = "ЛЛЛЛЛЛЛЛЛasdasdasd #Beryl#Simon#FFFFFFFF#zzzzzzzzzzzz";



User::find(1)->tweets()->create(['content' => $tweetContent]);
$tweetsId = Tweet::where('content', $tweetContent)->pluck('id')->toArray();
$lastTweet = end($tweetsId);



if(preg_match_all("/#\b\w+\b/", $tweetContent, $tweetHashtags)) {
    foreach ($tweetHashtags[0] as $h) {

        $Hashtags = \App\Models\Hashtag::pluck("hashtag")->toArray();
        if (!in_array($h, $Hashtags)) {
            \App\Models\Hashtag::create(['hashtag' => $h]);
        }

        $HashtagsSecond = \App\Models\Hashtag::pluck("hashtag")->toArray();
        if (in_array($h, $HashtagsSecond)) {
            $hh=\App\Models\Hashtag::where('hashtag', $h)->pluck("id");
            \App\Models\TweetHashtag::create(['tweet_id' => $lastTweet, 'hashtag_id' => $hh[0]]);
        }
    }
}*/


//\App\Models\TweetHashtag::create(["tweet_id"=>1, 'hashtag_id'=>1]);
/*$hashtag_id = Hashtag::where("hashtag", "#kkk")->pluck('id');
var_dump($hashtag_id);
$asd = Hashtag::find($hashtag_id[0])->tweets()->get();
var_dump($asd);*/

