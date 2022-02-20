<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFollow extends Model
{
    use HasFactory;

    protected $fillable = ["followerId", "followedId"];

    public function userFollow()
    {
        return $this->belongsTo(User::class, 'followerId', 'followedId');
    }


}
