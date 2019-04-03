<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_tag')->insert([
            'post_id' => 1,
            'tag_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 1,
            'tag_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 1,
            'tag_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


        DB::table('post_tag')->insert([
            'post_id' => 2,
            'tag_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 2,
            'tag_id' => 4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('post_tag')->insert([
            'post_id' => 2,
            'tag_id' => 5,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
