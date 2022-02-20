<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\Eloquent;
use App\Repositories\TweetRepository;
use App\AddTweet;
use App\FollowUnfollow;
use App\SearchHashtags;

class TweetController extends Controller
{

    public function show()
    {
        return response()->json(TweetRepository::getTweet(1));
    }

    public function userShow($id)
    {
        return response()->json(['data'=>TweetRepository::getTweet($id)]);
    }

    public function showAllUsers(){

        return response()->json(TweetRepository::getUsers());

    }

    public function addTweet(Request $req){
        $adder = new AddTweet();
        $adder->Add($req);
        return response($req);
    }

    public function follow($id){
        FollowUnfollow::follow($id);
        return response("Подписка оформлена");
    }

    public function unFollow($id){
        FollowUnfollow::unFollow($id);
        return response("Вы отписались");
    }

    public function getHashtags(Request $req)
    {
        $hashtag = $req->hashtag;
        $serch = new SearchHashtags();
        $tweets = $serch->search($hashtag);
        return response()->json($tweets);
    }
}
