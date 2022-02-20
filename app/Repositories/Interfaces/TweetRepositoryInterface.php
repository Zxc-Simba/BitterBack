<?php

namespace App\Repositories\Interfaces;
use App\Models\Tweet;
use App\Models\User;
use App\Models\UserFollow;

interface TweetRepositoryInterface
{
    public static function getTweet($user_id);

    public function getUsersTweets(User $user);

    public static function getUsers();
}
