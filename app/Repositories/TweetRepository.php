<?php

namespace App\Repositories;

use App\Models\Tweet;
use App\Models\User;
use App\Models\UserFollow;
use App\Repositories\Interfaces\TweetRepositoryInterface;

class TweetRepository implements TweetRepositoryInterface
{
    public static function getTweet($user_id)
    {
        $followers_id = UserFollow::where('followerId', $user_id)->pluck('followedId')->toArray();

        return $tweets = Tweet::with('user')
            ->whereIn('user_id', $followers_id)
            ->orWhereIn('user_id', [$user_id])
            ->latest()
            ->get();

    }

    public function getUsersTweets(User $user){}

    public static function getUsers()
    {
        return $users = User::all()->where('id', '!=', 1);
    }

}
