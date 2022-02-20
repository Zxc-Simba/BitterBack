<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTweetMentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet_mentions', function (Blueprint $table) {

            $table->id();
            $table->foreignId("tweet_id")->constrained();
            $table->unsignedBigInteger('mentionedUserId');
            $table->foreign('mentionedUserId')->references('id')->on('users');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweet_mentions');
    }
}
