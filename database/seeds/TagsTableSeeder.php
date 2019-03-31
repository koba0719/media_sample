<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tagNames = ["コラム", "Kotlin", "Golang", "PHP", "Ruby"];

        foreach ($tagNames as $tagName) {
            DB::table('tags')->insert([
                'name' => $tagName,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
