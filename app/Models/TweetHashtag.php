<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetHashtag extends Model
{
    use HasFactory;

    protected $fillable = ["tweet_id", 'hashtag_id'];
}
