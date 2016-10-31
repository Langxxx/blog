<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articles')->delete();

        for ($i=0; $i < 10; $i++) {
            \App\Article::create([
                'title'   => 'Title '.$i,
                'content'    => 'content '.$i,
                'introduction' => 'Introduction' . $i,
                'published_at' => \Carbon\Carbon::now(),
            ]);
        }
    }

}
