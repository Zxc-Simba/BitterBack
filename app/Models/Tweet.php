<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = ["content"];

    public function hashtags()
    {
        return $this->belongsToMany(Hashtag::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function tweetMentions()
    {
        return $this->hasMany(TweetMention::class, 'tweet_id');
    }

}
