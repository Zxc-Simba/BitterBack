<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TweetMentionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            "tweet_id"=>$this->faker->numberBetween(1, 20),
            'mentionedUserId'=>$this->faker->numberBetween(1, 10)
        ];
    }
}
