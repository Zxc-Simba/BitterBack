<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TweetMention extends Model
{
    use HasFactory;
    protected $fillable = ["mentionedUserId"];

    public function users()
    {
        return $this->hasMany(User::class, 'mentionedUserId');
    }

    public function tweets()
    {
        return $this->belongsTo(Tweet::class);
    }


}
