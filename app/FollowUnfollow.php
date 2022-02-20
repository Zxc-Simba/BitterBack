<?php
namespace App;
use App\Models\User;
use App\Models\UserFollow;

class FollowUnfollow
{
        public static function follow($id){

           $myUser = User::find(1);
           $myUser->following()->attach($id);


        }

        public static function unFollow($id){

            $myUser = User::find(1);
            $myUser->following()->detach($id);

        }
}
