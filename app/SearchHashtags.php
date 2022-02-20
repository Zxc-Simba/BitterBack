<?php

namespace App;
use App\Models\Hashtag;
use App\Models\Tweet;
use App\Models\User;

class SearchHashtags
{
public function search($hashtag)
{
    $hashtag_id = Hashtag::where("hashtag", $hashtag)->pluck('id');
    $tweets = Hashtag::find($hashtag_id[0])->tweets()->get();
    return $tweets;
}
}
