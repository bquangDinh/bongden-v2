<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $numArticles = 100;
      factory(App\Article::class,$numArticles)->create();
    }
}
