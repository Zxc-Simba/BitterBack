<?php

namespace App;
use App\Models\Tweet;
use App\Models\TweetMention;
use App\Models\User;
use App\Models\Hashtag;
use App\Models\TweetHashtag;


class AddTweet{

public function Add($req)
{

    $tweetContent = $req->tweet;
    $userNames = array();
    $users = User::all();

    //Создание нового твита и получение его id
    User::find(1)->tweets()->create(['content' => $tweetContent]);
    $tweetIds = Tweet::where('content', $tweetContent)->pluck('id');
    $lastTweet = $tweetIds[count($tweetIds)-1];

    //Проверка твита на отметки и хэштеги
    preg_match_all("/@\b\w+\b/", $tweetContent, $tweetMentions);
    preg_match_all("/#\b\w+\b/", $tweetContent, $tweetHashtags);


    //Перебор отметок без знака @ в начале
    foreach ($tweetMentions[0] as $m) {
        $a = substr($m, 1);
        array_push($userNames, $a);
    }

    //Получение id отмеченных пользователей из таблицы users
    $userIds = $users->whereIn('username', $userNames)
        ->pluck('id')->toArray();

    //Создание записей отмеченных пользователей в таблице TweetMention
    foreach ($userIds as $userId) {

        Tweet::find($lastTweet)->tweetMentions()->create(['mentionedUserId' => $userId]);

    }

    //Перебор хэштегов
    foreach ($tweetHashtags[0] as $h) {
        $Hashtags = Hashtag::pluck("hashtag")->toArray();

        //Проверка на существование хэштегов в таблице, если нет то создать
        if (!in_array($h, $Hashtags)) {
            Hashtag::create(['hashtag' => $h]);
        }

        //Если хэштеги есть, то создать связь в таблице TweetHashtag
        $HashtagsSecond = Hashtag::pluck("hashtag")->toArray();
        if (in_array($h, $HashtagsSecond)) {
            $hh=Hashtag::where('hashtag', $h)->pluck("id");
            for ($i = 0; $i<count($hh); $i++) {
                TweetHashtag::create(['tweet_id' => $lastTweet, 'hashtag_id' => $hh[$i]]);
            }
        }

    }


}

}
