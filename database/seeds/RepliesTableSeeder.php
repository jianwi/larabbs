<?php

use Illuminate\Database\Seeder;
use App\Models\Reply;

class RepliesTableSeeder extends Seeder
{
    public function run()
    {
        $faker = app(Faker\Generator::class);

        $user_ids = \App\Models\User::all()->pluck('id')->toArray();

        $topic_ids = \App\Models\Topic::all()->pluck('id')->toArray();

        $replies = factory(Reply::class)->times(50)->make()->each(function ($reply, $index) use ($faker,$user_ids,$topic_ids) {
            $reply->user_id = $faker->randomElement($user_ids);
            $reply->topic_id = $faker->randomElement($topic_ids);
        });

        Reply::insert($replies->toArray());
    }

}

