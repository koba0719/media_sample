<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'テスト投稿',
            'user_id' => 1,
            'content' =>
                'テスト投稿をしました。
                上手に反映されていますか？
                ポートフォリオの出来を確認しましょう',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('posts')->insert([
           'title' => 'Laravel',
            'user_id' => 2,
            'content' =>
               'Laravelのポートフォリオを作ってみました
               見てみてください
               ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
